<?php

namespace App\Http\Controllers;

use App\Models\AccountBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuBSController extends Controller
{
    public function Doctors(Request $Request, $model)
    {
        $adminUser = Auth::guard('admin')->user();
        $Models = '\App\Models\\'.$model;
        $Models = (new AccountBS);
        $configs = $Models->listingconfigs();
        $records = $Models::paginate(2);

        if ($model == 'AccountBS') {
            return view("admin.taikhoanBS", [
                'user'    => $adminUser,
                'records' => $records,
                'configs' => $configs,
            ]);
        }
        if ($model == 'Doctors') {
            return view("admin.menuBS", [
                'user'    => $adminUser,
                'records' => $records,
                'configs' => $configs,
            ]);
        }
    }
}
 
