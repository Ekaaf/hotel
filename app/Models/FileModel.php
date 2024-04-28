<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    use HasFactory;
    protected $table = "files";
    protected $primaryKey = "id";

    // Define the relationship with the Rooms model
    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }
}
