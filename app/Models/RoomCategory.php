<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;
    protected $table = "room_categories";
    protected $primaryKey = "id";

    // Define the relationship with the Files model
    public function files()
    {
        return $this->hasMany(FileModel::class);
    }
}
