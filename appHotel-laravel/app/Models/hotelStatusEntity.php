<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelStatusEntity extends Model
{
    use HasFactory;

    protected $table = "hotelStatusEntitys";

    protected $fillable = [
        "name",
        "description",

    ];

    //relations
    /*public function hotelRoomCategorys(){
        return $this->hasMany(hotelRoomCategory::class,'hotelStatusEntity_id');
    }*/
    public function hotelRoomCategorys(){
        return $this->hasMany(hotelRoomCategory::class,'hotelStatusEntity_id');
    }
    public function hotelTypeRooms(){
        return $this->hasMany(hotelTypeRoom::class,'hotelStatusEntity_id');
    }
}   
