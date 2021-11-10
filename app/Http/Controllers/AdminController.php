<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Set Middleware for this controller
     */
    public function __construct()
    {
        $this->middleware('guest')->except('ShowAdminDashboard');
    }


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