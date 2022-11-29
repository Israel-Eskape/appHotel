<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelTypeRoom
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelStatusEntity $hotel_status_entity
 * @property Collection|HotelRoom[] $hotel_rooms
 *
 * @package App\Models
 */
class HotelTypeRoom extends Model
{
	protected $table = 'hotelTypeRooms';

	protected $casts = [
		'hotelStatusEntity_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'hotelStatusEntity_id'
	];

	public function hotelStatusEntity()
	{
		return $this->belongsTo(HotelStatusEntity::class,'hotelStatusEntity_id');
	}

	public function hotelRooms()
	{
		return $this->hasMany(HotelRoom::class);
	}
}
