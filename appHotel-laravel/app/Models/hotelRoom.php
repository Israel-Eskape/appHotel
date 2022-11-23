<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelRoom
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $available
 * @property int $hotelCost_id
 * @property int $hotelTypeRoom_id
 * @property int $hotelRoomCategory_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelCost $hotel_cost
 * @property HotelRoomCategory $hotel_room_category
 * @property HotelStatusEntity $hotel_status_entity
 * @property HotelTypeRoom $hotel_type_room
 * @property Collection|HotelHotel[] $hotel_hotels
 * @property Collection|HotelReservation[] $hotel_reservations
 *
 * @package App\Models
 */
class HotelRoom extends Model
{
	protected $table = 'hotelRooms';

	protected $casts = [
		'available' => 'int',
		'hotelCost_id' => 'int',
		'hotelTypeRoom_id' => 'int',
		'hotelRoomCategory_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'available',
		'hotelCost_id',
		'hotelTypeRoom_id',
		'hotelRoomCategory_id',
		'hotelStatusEntity_id'
	];

	public function hotel_cost()
	{
		return $this->belongsTo(HotelCost::class);
	}

	public function hotel_room_category()
	{
		return $this->belongsTo(HotelRoomCategory::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}

	public function hotel_type_room()
	{
		return $this->belongsTo(HotelTypeRoom::class);
	}

	public function hotel_hotels()
	{
		return $this->hasMany(HotelHotel::class);
	}

	public function hotel_reservations()
	{
		return $this->hasMany(HotelReservation::class);
	}
}
