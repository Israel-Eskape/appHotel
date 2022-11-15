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
        "description"
    ];

    //relations
    public function hotelRoomCategory(){
        return $this->belongsTo(hotelRoomCategorys::class);
    }

}
