<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\UpdateProfile;
use App\Models\Doctors;
use App\Models\medicine;
use App\Models\MedicineInRecord;
use App\Models\User;
use App\Models\Users\PersonalMedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function indexLogin()
    {
        return view('doctor.login');
    }

    public function authenticate(Request $request)
    {
        //auth()->logout();
        $userCredentials = $request->only('email', 'password');
        // check user using auth function
        if ($Doctors = Doctors::where($userCredentials)->first()) {
            auth('doctors')->login($Doctors);
            $doctor_id = auth('doctors')->user()->id;
            $data = PersonalMedicalRecord::withTrashed()
                                         ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                        ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                         ->get();

            return view('doctor.dashboard', ['data' => $data]);
        } else {
            return redirect()->back();
        }
    }

    public function dashboard()
    {
        if (auth('doctors')) {
            $doctor_id = auth('doctors')->user()->id;
            $data = PersonalMedicalRecord::withTrashed()
                                         ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                         ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                         ->get();

            return view('doctor.dashboard', ['data' => $data]);
        }

        return view('login');
    }

    public function UpdateProfile(UpdateProfile $request)
    {
        dd('$data');
        $data = $request->validated();
        dd($data);
        //    if($data->update($data)){
        //    return route('doctor.dashboard');
        //
        //}
        //return view('doctor/');
    }

    public function logout()
    {
        Auth::guard('doctors')->logout();

        return redirect('doctor/login');
    }

    public function schedule()
    {
        $doctor_id = auth('doctors')->user()->id;
        $schedule = PersonalMedicalRecord::query()
                                         ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                         ->orWhere([['doctor_id', $doctor_id], ['status', 'Đã xác nhận']])
                                         ->get();
        $data = PersonalMedicalRecord::withTrashed()
                                     ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                     ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                     ->get();

        return view('doctor/schedule', ['schedule' => $schedule, 'data' => $data]);
    }

    public function historySchedule()
    {
        $doctor_id = auth('doctors')->user()->id;
        $historySchedule = PersonalMedicalRecord::query()
                                                ->where([['status', 'Hoàn thành'], ['doctor_id', $doctor_id]])
                                                ->get();
        $data = PersonalMedicalRecord::withTrashed()
                                     ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                     ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                     ->get();

        return view('doctor/historySchedule', ['schedule' => $historySchedule, 'data' => $data]);
    }

    public function detail($recordId)
    {
        $doctor_id = auth('doctors')->user()->id;
        $data = PersonalMedicalRecord::withTrashed()
                                     ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                     ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                     ->get();
        $show = PersonalMedicalRecord::query()->where('id', $recordId)->get();
        $medicine = MedicineInRecord::query()->where('record_id', $recordId)->get();

        return view('doctor/detailSchedule', ['data' => $data, 'show' => $show, 'medicine' => $medicine]);
    }

    public function actionSchedule()
    {
        $doctor_id = auth('doctors')->user()->id;
        $id_schedule = $_GET['id_schedule'];
        $check = PersonalMedicalRecord::query()->where('id', $id_schedule)->get();
        $namePatient = $check[0]->name_patient;
        $Patient = User::query()->where('name', $namePatient)->get();
        $data = PersonalMedicalRecord::withTrashed()
                                      ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                      ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                      ->get();
        return view('doctor/actionSchedule', [
            'Patient'     => $Patient,
            'id_schedule' => $id_schedule,
            'data'        => $data,
        ]);
    }

    public function historyPersonal(Request $request, $userID)
    {
        $doctor_id = auth('doctors')->user()->id;
        $data = PersonalMedicalRecord::withTrashed()
                                     ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                     ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                     ->get();
        $show = PersonalMedicalRecord::query()->where([['created_by', $userID], ['status', 'Hoàn thành']])->get();
        for ($i=0;$i<count($show);$i++)
        {
            $record_id=$show[$i]->id;
            $show[$i]->medicine=MedicineInRecord::query()->where([['record_id',$record_id],['deleted_at',null]])->get();
        }
        return view('doctor/historyPersonal', ['data' => $data, 'show' => $show]);
    }

    public function checkSchedule(Request $request)
    {
        $doctor_id = auth('doctors')->user()->id;
        DB::table('personal_medical_records')
          ->where('id', $request->checkBox)
          ->update(['status' => 'Đã xác nhận']);
        $data = PersonalMedicalRecord::query()->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])->get();

        return view('doctor.dashboard', ['data' => $data]);
    }

    public function addMedicine(Request $request)
    {
        if (! empty($request)) {
            $medicineInRecord = new MedicineInRecord();
            $medicineInRecord->record_id = $request->id_schedule;
            $medicineInRecord->name = $request->name;
            $medicineInRecord->sl = $request->sl;
            $medicineInRecord->DVT = $request->DVT;
            $medicineInRecord->sl_Morning = $request->sl_Morning;
            $medicineInRecord->DVT_Morning = $request->DVT_Morning;
            $medicineInRecord->sl_Afternoon = $request->sl_Afternoon;
            $medicineInRecord->DVT_Afternoon = $request->DVT_Afternoon;
            $medicineInRecord->sl_Night = $request->sl_Night;
            $medicineInRecord->DVT_Night = $request->DVT_Night;
            $medicineInRecord->doctor_id = auth('doctors')->user()->id;
            $price=medicine::query()->where('name',$request->name)->get();
            $medicineInRecord->price = $price[0]->price;
            $medicineInRecord->total = $request->sl * $price[0]->price;
            $medicineInRecord->save();
            return response()->json(['success' => 'Added new records.', $medicineInRecord->name]);
        }
    }

    public function deleteMedicine()
    {

    }

    public function complete(Request $request)
    {
        if (! empty($request)) {

            $PersonalMedicalRecord = PersonalMedicalRecord::find($request->id_schedule);
            $PersonalMedicalRecord->Diagnostic_Results = $request->Diagnostic_Results;
            $PersonalMedicalRecord->diagnose = $request->diagnose;
            $PersonalMedicalRecord->note = $request->note;
            $PersonalMedicalRecord->noteMedicine = $request->noteMedicine;
            $PersonalMedicalRecord->status = "Hoàn thành";
            $PersonalMedicalRecord->save();
        }
        if (! $request->date == '') {
            $reBook = PersonalMedicalRecord::query()->where('id', $request->id_schedule)->get();
            $newBook = new PersonalMedicalRecord();
            $newBook->symptom = $reBook[0]->symptom;
            $newBook->branch = $reBook[0]->branch;
            $newBook->specialist = $reBook[0]->specialist;
            $newBook->status = "Đã xác nhận";
            $newBook->created_by = $reBook[0]->created_by;
            $newBook->name_patient = $reBook[0]->name_patient;
            $newBook->doctor_id = $reBook[0]->doctor_id;
            $newBook->nameDoctor = $reBook[0]->nameDoctor;
            $newBook->dateBook = $request->date;
            $newBook->timeBook = $request->time;
            $newBook->save();
        }

        return response()->json(['success' => 'Added new records.']);
    }

    public function listMedicine(Request $request)//chua xong
    {
        if (! empty($request)) {
            $record_id=MedicineInRecord::query()->where('record_id',$request->record_id)->get();
            return response()->json(['success' => 'Added new records.',$record_id->all()]);
        }
    }

    public function doctorDelete($record_id)
    {
        PersonalMedicalRecord::find($record_id)->delete();
        $doctor_id = auth('doctors')->user()->id;
        $schedule = PersonalMedicalRecord::query()
                                         ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                         ->orWhere([['doctor_id', $doctor_id], ['status', 'Đã xác nhận']])
                                         ->get();
        $data = PersonalMedicalRecord::withTrashed()
                                     ->where([['doctor_id', $doctor_id], ['status', 'Chờ xác nhận']])
                                     ->orWhere([['doctor_id', $doctor_id], ['status', 'Bệnh nhân hủy lịch']])
                                     ->get();

        return view('doctor/schedule', ['schedule' => $schedule, 'data' => $data]);
    }
    public function checkQuantity(Request $request)
    {
        if (!empty($request))
        {
            $check=medicine::query()->where('name',$request->name)->get();
            if($request->quantity > $check[0]->quantity)
            {
                return response()->json(['successError' => 'Error','quantity'=>$check[0]->quantity]);
            }
                return response()->json(['success' => 'OK','quantity'=>$request->quantity]);

        }
    }
}



