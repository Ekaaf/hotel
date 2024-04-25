<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rooms;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();
        $data = compact('rooms');
        return view('frontend.rooms')-> with($data);
    }

    public function roomDetails(Request $id)
    {
        $rooms = Rooms::find($id);
        $data = compact('rooms');
        return view('frontend.room-details')-> with($data);
    }
}
