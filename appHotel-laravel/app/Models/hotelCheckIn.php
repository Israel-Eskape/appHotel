<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelCheckIn extends Model
{
    use HasFactory;
    protected $table = "hotelCheckIns";
    protected $fillable = [
        'date',
        'time',
        'hotelStatusEntity_id'
    ];
}
