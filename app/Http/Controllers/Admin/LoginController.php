<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dash';
    protected $username;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        $this->username = config('admin.globals.username');
    }

    public function showLoginForm()
    {
    	return view('admin.login.index');
    }

    public function guard()
    {
    	return auth()->guard('admin');
    }
}
