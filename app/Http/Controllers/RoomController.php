<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RoomController extends Controller
{
    public function index()
    {
        return view('frontend.rooms');
    }

    public function roomDetails()
    {
        return view('frontend.room-details');
    }
}
