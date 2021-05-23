<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmBook;
use App\Models\branchs;
use App\Models\Doctors;
use App\Models\MedicineInRecord;
use App\Models\Users\PersonalMedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function logout()
    {
        \auth()->logout();

        return view('welcome');
    }

    public function BookCalendar()
    {
        if (auth()->check()) {
            return view('BookCalendar');
        }

        return view('auth.login');
    }

    public function ShowCalendar()
    {
        if (auth()->check()) {
            $id = auth()->user()->id;
            $show = PersonalMedicalRecord::query()
                                         ->where([['created_by', $id], ['status', 'Chờ xác nhận']])
                                         ->orWhere([['created_by', $id], ['status', 'Đã xác nhận']])
                                         ->get();

            return view('ShowCalendar', ['show' => $show]);
        }

        return view('auth.login');
    }

    public function HistoryCalendar()
    {
        if (auth()->check()) {
            $id = auth()->user()->id;
            $show = PersonalMedicalRecord::query()->where([['created_by', $id], ['status', 'Hoàn thành']])->get();
            for ($i=0;$i<count($show);$i++)
            {
                $record_id=$show[$i]->id;
                $show[$i]->medicine=MedicineInRecord::query()->where([['record_id',$record_id],['deleted_at',null]])->get();
            }
            return view('historyCalendar', ['show' =>$show]);
        }

        return view('auth.login');
    }

    public function Profile()
    {
        return view('Profile');
    }

    public function ChangePassword()
    {
        return view('ChangePassword');
    }

    public function ajaxStep1(Request $request)
    {
        if (! empty($request)) {
            $getDoctor = Doctors::query()
                                ->where([['branch', $request->chinhanh], ['specialist', $request->chuyenkhoa]])
                                ->get();
            //$request->session()->push('book',$getDoctor);
            if (session('variableName', $getDoctor)) {
                return response()->json([
                    'success'   => 'Added new records.',
                    'getDoctor' => $getDoctor,
                ]);
            } else {
                return response()->json(['error' => 'no session']);
            }
        }

        return response()->json(['error' => 'sai']);
    }

    public function ajaxStep2(Request $request)
    {
        if (! empty($request)) {
            $calendarDoctor = Doctors::query()
                                     ->where('id', $request->clicked)
                                     ->get();

            return response()->json(['success' => 'Added new records.', 'calendarDoctor' => $calendarDoctor]);
        }
    }

    public function ajaxStep3(Request $request)
    {
        if (! empty($request)) {
            $timeBook = PersonalMedicalRecord::query()->where([
                ['dateBook', $request->date],
                ['doctor_id', $request->clicked],
            ])->get();

            return response()->json(['success' => 'Added new records.', 'timeBook' => $timeBook]);
        }
    }

    public function ajaxStep4(Request $request)
    {
        //console.log($request);
        if ($request->dateBook == '' ||
            $request->doctor_id == '' ||
            $request->symptom == '' ||
            $request->branch == '' ||
            $request->specialist == '' ||
            $request->nameDoctor == '' ||
            $request->timeBook == ''
        ) {
            return response()->json(['null']);
        }
        if (! empty($request)) {
            $data = $request->validate([
                'dateBook'   => 'required',
                'doctor_id'  => 'required',
                'symptom'    => 'required',
                'branch'     => 'required',
                'specialist' => 'required',
                'nameDoctor' => 'required',
                'timeBook'   => 'required',
            ]);
            $data['created_by'] = auth()->user()->id;
            $data['status'] = 'Chờ xác nhận';
            $data['name_patient'] = auth()->user()->name;

            if (PersonalMedicalRecord::create($data)) {
                //$this->sendMail($request);

                return response()->json(['success' => 'Added new records.', $data]);
            }
        }
    }

    public function sendMail($request)
    {
        $email = auth()->user()->email;
        $data = Mail::to($email)->send(new ConfirmBook($request));
    }
    public function patientDelete($record_id)
    {
        PersonalMedicalRecord::find($record_id)->update('status',"Bệnh nhân hủy lịch")->delete();
        $id = auth()->user()->id;
        $show = PersonalMedicalRecord::query()
                                     ->where([['created_by', $id], ['status', 'Chờ xác nhận']])
                                     ->orWhere([['created_by', $id], ['status', 'Đã xác nhận']])
                                     ->get();

        return view('ShowCalendar', ['show' => $show]);
    }
    public function detailCalendar($record_id)
    {
        $book=PersonalMedicalRecord::query()->where('id',$record_id)->get();
        $doctor=Doctors::query()->where('id',$book[0]->doctor_id)->get();
        $address=branchs::query()->where('name',$book[0]->branch)->get();
        return view('detailCalendar',['book'=>$book,'doctor'=>$doctor,'address'=>$address]);
    }
    public function cancelCalendar($record_id)
    {
        PersonalMedicalRecord::find($record_id)->update(['status' => "Bệnh nhân hủy lịch"]);
        PersonalMedicalRecord::find($record_id)->delete();
        return redirect()->route('ShowCalendar');
    }
}

