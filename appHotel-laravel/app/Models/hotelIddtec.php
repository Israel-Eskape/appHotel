<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelIddtec extends Model
{
    use HasFactory;
    protected $table = "hotelIddtecs";
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'hotelEmployee_id',
        'hotelStatusEntity_id'
    ];
}
