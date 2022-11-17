<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iddtecEmployee extends Model
{
    use HasFactory;
    protected $table = "iddtecEmployees";
    protected $fillable = [
        'rfc',
        'password',
        'hotelPeople_id',
        'hotelStatusEntity'
    ];
}
