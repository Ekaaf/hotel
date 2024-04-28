<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rooms;
use App\Models\FileModel;
use App\Service\RoomService;

class RoomController extends Controller
{
    public function rooms()
    {
        $rooms = Rooms::all();
        $files = FileModel::where('type','room-category-thumb')->get()->keyBy('element_id');
        $data = compact('rooms', 'files');
        return view('frontend.rooms')-> with($data);
    }

    public function roomDetails(Request $request, $id)
    {
        $room = Rooms::find($id);
        $files = FileModel::where('element_id',$id)->get();
        $data = compact('room', 'files');
        return view('frontend.room-details')-> with($data);

    }
}
