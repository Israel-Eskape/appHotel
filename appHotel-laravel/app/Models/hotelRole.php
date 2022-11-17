<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelRole extends Model
{
    use HasFactory;
    protected $table = "hotelRoles";
    protected $fillable = [
        'name',
        'description',
        'hotelStatusEntity_id'
    ];
}
