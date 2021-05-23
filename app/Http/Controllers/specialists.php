<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class specialists extends Controller
{
    public function index(Request $Request, $model)
    {
        $adminUser = Auth::guard('admin')->user();
        // var_dump($model);exit;
        $Models = '\App\Models\\'.$model;

        if ($model == 'specialists') {
            $Models = (new Specialist);
            $configs = $Models->listingconfigs();
            $records = $Models::paginate(1);

            // var_dump($adminUser);exit;

            return view("admin.specialist", [
                'user'    => $adminUser,
                'records' => $records,
                'configs' => $configs,
            ]);
        }
        if ($model == 'addspecialist') {
            $Models = new Specialist;
            $bacsi = Doctors::select('name')->get();

            return view("admin.addspecialist", [
                'user'  => $adminUser,
                'bacsi' => $bacsi,
                // 'records'=>$records,
                // 'configs'=>$configs
            ]);
        }
    }
}
