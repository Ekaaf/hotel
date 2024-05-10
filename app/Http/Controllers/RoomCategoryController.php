<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\RoomCategory;
use App\Models\RoomCategoryRent;
use App\Models\FileModel;
use App\Http\Requests\RoomCategory\RoomCategorySaveRequest;
use App\Http\Requests\RoomCategory\RoomCategoryUpdateRequest;
use App\Http\Requests\RoomCategoryRent\RoomCategoryRentSaveRequest;
use App\Http\Requests\RoomCategoryRent\RoomCategoryRentUpdateRequest;
use App\SSP;
use DateTime;
use DatePeriod;
use DateInterval;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use App\Service\MenuService;
use Illuminate\Support\Facades\DB;

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
        // Asad code starts here
        $room_category_by_id = RoomCategory::find($id);
        $files = FileModel::where('element_id', $id)->get();
        $data = compact('room_category_by_id', 'files');
        return view('room_category_and_details.room-details')-> with($data);
        // Asad code ends here
    }

    public function searchRoomCategory(Request $request)
    {
        $check_in = $request->check_in;
        $check_out = $request->check_out;
        $bookings = Booking::where('to_date', '<=', $check_in)->where('from_date', '>=', $check_out)->pluck('room_id');

        $available_rooms = Rooms::select('room_categories.*', DB::raw('COUNT(room_categories.id) as no_of_rooms'), 'files.path', 'files.filename')->join('room_categories', 'rooms.room_category_id', 'room_categories.id')
                            ->join('files', 'room_categories.id', 'files.element_id')
                            ->where('files.type', 'room-category-thumb')
                            ->whereNotIn('room_number', $bookings)
                            ->groupBy('room_categories.id', 'files.path', 'files.filename')->get();
        return response()->json($available_rooms);
    }

}
