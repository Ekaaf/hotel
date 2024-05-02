<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RoomCategory;
use App\Models\FileModel;
use App\Service\RoomService;

class RoomCategoryController extends Controller
{
    public function roomCategory()
    {
        $room_category = RoomCategory::all();
        $files = FileModel::where('type', 'room-category-thumb')->get()->keyBy('element_id');
        $data = compact('room_category', 'files');
        return view('room_category_and_details.rooms')-> with($data);
    }

    public function roomDetails(Request $request, $id)
    {
        $room_category_by_id = RoomCategory::find($id);
        $files = FileModel::where('element_id', $id)->get();
        $data = compact('room_category_by_id', 'files');
        return view('room_category_and_details.room-details')-> with($data);

    }
}
