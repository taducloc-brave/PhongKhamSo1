<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //login
    public function signinPost(Request $Request)
    {
        $credentials = $Request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route("admin.dashboard");
        } else {
            echo "notwinaaa";
            exit;
        }
    }

    // kiem tra login hay chua
    public function dashboard()
    {
        $adminUser = Auth::guard('admin')->user();

        return view("admin.dashboard", ['user' => $adminUser]);
    }

    //statistics
    public function statistics()
    {
        $adminUser = Auth::guard('admin')->user();

        return view("admin.statistics", ['user' => $adminUser]);
    }

    //logout
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect("admin/signin");
    }
}


