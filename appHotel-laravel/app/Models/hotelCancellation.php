<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelCancellation extends Model
{
    use HasFactory;
    
    protected $table = "hotelCancellations";
    
    protected $fillable = [
        'reason',
        'refound',
        'hotelReservation_id',
        'hotelStatusEntity_id'
    ];
}
