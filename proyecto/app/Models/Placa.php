<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Placa
 * 
 * @property int $ID
 * @property string|null $NOMPLACA
 * @property string|null $TIPOPLACA
 * 
 * @property Collection|Vehiculo[] $vehiculos
 *
 * @package App\Models
 */
class Placa extends Model
{
	protected $table = 'placas';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'NOMPLACA',
		'TIPOPLACA'
	];

	public function vehiculos()
	{
		return $this->hasMany(Vehiculo::class, 'IDPLACAS');
	}
}
