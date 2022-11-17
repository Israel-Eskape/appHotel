<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelCustomer extends Model
{
    use HasFactory;
    protected $table = "hotelCustomers";
    protected $fillable = [
        'hotelPeople_id',
        'hotelReservation_id',
        'hotelStatusEntity_id'
    ];
}
