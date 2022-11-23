<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelCheckOut
 * 
 * @property int $id
 * @property Carbon $date
 * @property Carbon $time
 * @property int $hotelPoll_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelPoll $hotel_poll
 * @property HotelStatusEntity $hotel_status_entity
 * @property Collection|HotelReservation[] $hotel_reservations
 *
 * @package App\Models
 */
class HotelCheckOut extends Model
{
	protected $table = 'hotelCheckOuts';

	protected $casts = [
		'hotelPoll_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $dates = [
		'date',
		'time'
	];

	protected $fillable = [
		'date',
		'time',
		'hotelPoll_id',
		'hotelStatusEntity_id'
	];

	public function hotel_poll()
	{
		return $this->belongsTo(HotelPoll::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}

	public function hotel_reservations()
	{
		return $this->hasMany(HotelReservation::class);
	}
}
