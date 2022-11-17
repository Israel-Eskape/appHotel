<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelReservation extends Model
{
    use HasFactory;
    protected $table = "hotelReservations";
    protected $fillable = [
        'description',
        'arrival',
        'departure',
        'amountPeople',
        'hotelRoom_id',
        'hotelCheckIn_id',
        'hotelCheckOut_id',
        'hotelPay_id',
        'hotelStatusEntity_id'
    ];
}
