<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\taikhoanBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BScontroller extends Controller
{
    public function option(Request $Request, $model)
    {

        $adminUser = Auth::guard('admin')->user();
        $specialist = Doctors::select('specialist')->get();
        $branch = Doctors::select('branch')->get();
        $role = Doctors::select('role')->get();

        return view("admin.$model", [
            'user'       => $adminUser,
            'specialist' => $specialist,
            'branch'     => $branch,
            'role'       => $role,
        ]);
    }
    // public function add (Request $request){
    // 	$add = new Doctors();
    // 	$add->name = $request->name;
    //  $add->passWord = $request->passWord;
    //  $add->email = $request->email;
    //  $add->phone = $request->phone;
    //  $add->gender = $request->gender;
    //  $add->dateOfBirth = $request->dateOfBirth;
    //  $add->specialist = $request->specialist;
    //  $add->branch = $request->branch;
    //  $add->role = $request->role;
    // 	$add -> save();
    // 	return view('admin.menuBS');

    // };

    // public function show(){
    // 	$show = bacsi::select('specialist')->get();
    // 	return view("admin.add",['specialist'=>$show]);
    // }
    // public function add(){
    // 	$show = bacsi::select('specialist')->get();
    // 	return view("admin.add",['specialist'=>$show]);
    // }
}
