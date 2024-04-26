<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rooms;
use App\Models\Files;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();
        $files = Files::where('filename', 'like', '%_thumb.webp%')->get();
        $data = compact('rooms', 'files');
        return view('frontend.rooms')-> with($data);
    }

    public function roomDetails(Request $request)
    {

        $id = (int) $request->input('id');
        $rooms = Rooms::find($id);
        $files = Files::where('element_id', $id)->get();
        $data = compact('rooms', 'files');
        return view('frontend.room-details')-> with($data);

    }
}
