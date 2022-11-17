<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelReservationStatu extends Model
{
    use HasFactory;
    protected $table = "hotelResercationStatus";
    protected $fillable = [
        'name',
        'description',
        'hotelStatusEntity_id'
    ];
}
