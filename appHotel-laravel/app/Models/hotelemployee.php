<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelemployee extends Model
{
    use HasFactory;
    protected $table = "hotelEmployees";
    protected $fillable = [
        'rfc',
        'passsword',
        'hotelPeople_id',
        'hotelStatusEntity_id'
    ];
}
