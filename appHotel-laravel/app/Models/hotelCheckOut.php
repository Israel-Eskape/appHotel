<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelCheckOut extends Model
{
    use HasFactory;
    protected $table = "hotelCheckOuts";
    protected $fillable = [
        'date',
        'time',
        'hotelPoll_id',
        'hotelStatusEntity_id'
    ];
}
