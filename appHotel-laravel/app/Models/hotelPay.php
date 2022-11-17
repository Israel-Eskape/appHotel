<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelPay extends Model
{
    use HasFactory;
    protected $table = "hotelPays";
    protected $fillable = [
        'name',
        'description',
        'hotelStatusEntity_id'
    ];
}
