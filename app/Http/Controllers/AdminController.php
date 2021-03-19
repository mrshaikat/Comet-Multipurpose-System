<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show Admin Login Form
     */

    public function ShowAdminLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Show Admin Registration Form
     */

    public function ShowAdminRegister()
    {
        return view('admin.register');
    }


    /**
     * Show Admin Dashboard
     */
    public function ShowAdminDashboard()
    {
        return view('admin.dashboard');
    }
}