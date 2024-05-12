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
        $booking_data_temp = $request->session()->get('booking_data_temp');
        $customers = User::where('role_id', Role::where('name', 'Customer')->value('id'))->get();
        return view('frontend.auth.view-profile')->with('booking_data_temp', $booking_data_temp)->with('customers', $customers);
    }

    public function resetPassword()
    {
        return view('frontend.auth.reset-password');
    }

    public function updatePassword()
    {
        return view('frontend.auth.update-password');
    }


}
