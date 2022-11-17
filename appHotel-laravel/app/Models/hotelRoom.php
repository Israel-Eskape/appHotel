<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelRoom extends Model
{
    use HasFactory;
    protected $table = "hotelRooms";
    protected $fillable = [
        'name',
        'description',
        'available',
        'hotelCost_id',
        'hotelTypeRoom_id',
        'hotelRoomCategory_id',
        'hotelStatusEntity_id'
    ];
}
