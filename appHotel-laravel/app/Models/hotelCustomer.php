<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelCustomer
 * 
 * @property int $id
 * @property int $hotelPeople_id
 * @property int $hotelReservation_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelPeople $hotel_people
 * @property HotelReservation $hotel_reservation
 * @property HotelStatusEntity $hotel_status_entity
 *
 * @package App\Models
 */
class HotelCustomer extends Model
{
	protected $table = 'hotelCustomers';

	protected $casts = [
		'hotelPeople_id' => 'int',
		'hotelReservation_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $fillable = [
		'hotelPeople_id',
		'hotelReservation_id',
		'hotelStatusEntity_id'
	];

	public function hotel_people()
	{
		return $this->belongsTo(HotelPeople::class);
	}

	public function hotel_reservation()
	{
		return $this->belongsTo(HotelReservation::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}
}
