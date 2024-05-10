<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.auth.login');
    }


    public function register()
    {
        return view('frontend.auth.register');
    }

    public function viewProfile()
    {
        return view('frontend.auth.view-profile');
    }

    public function updatePassword()
    {
        return view('frontend.auth.update-password');
    }


}
