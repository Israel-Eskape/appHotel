<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IddtecEmployee
 * 
 * @property int $id
 * @property string $rfc
 * @property string $password
 * @property int $hotelPeople_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelPeople $hotel_people
 * @property HotelStatusEntity $hotel_status_entity
 *
 * @package App\Models
 */
class IddtecEmployee extends Model
{
	protected $table = 'iddtecEmployees';

	protected $casts = [
		'hotelPeople_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'rfc',
		'password',
		'hotelPeople_id',
		'hotelStatusEntity_id'
	];

	public function hotel_people()
	{
		return $this->belongsTo(HotelPeople::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}
}
