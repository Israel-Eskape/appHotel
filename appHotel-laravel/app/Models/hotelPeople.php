<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelPeople extends Model
{
    use HasFactory;
    protected $table = "hotelPeoples";
    protected $fillable = [
        'name',
        'firstName',
        'lastName',
        'birthday',
        'address',
        'phone',
        'email',
        'hotelRole_id',
        'hotelStatusEntity_id'
    ];
}
