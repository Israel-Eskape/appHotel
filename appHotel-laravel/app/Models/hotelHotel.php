<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelHotel extends Model
{
    use HasFactory;
    protected $table = "hotelHotels";
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'hotelIddtec',
        'hotelEmployee_id',
        'hotelRoom_id',
        'hotelStatusEntity_id'    
    ];
}
