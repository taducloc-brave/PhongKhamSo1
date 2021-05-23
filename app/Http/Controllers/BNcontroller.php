<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BNcontroller extends Controller
{
    // public function index(Request $Request, $modelBN)
    //      {
    //        $adminUser = Auth::guard('admin')->user();
    //        $Models = '\App\Models\\'.$modelBS;

    //        return view("admin.DSbenhnhan",[
    //          'user'=>$adminUser,
    //        ]);
    //      }

    public function index(Request $Request, $modelBN)
    {
        $adminUser = Auth::guard('admin')->user();
        $Models = '\App\Models\\'.$modelBN;
        $Models = new $Models;
        $configs = $Models->listingconfigs();
        $records = $Models::paginate(2);

        return view("admin.DSbenhnhan", [
            'user'    => $adminUser,
            'records' => $records,
            'configs' => $configs,
        ]);
    }
}








