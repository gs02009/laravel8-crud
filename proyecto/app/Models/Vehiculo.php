<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 * 
 * @property int $ID
 * @property int $IDPLACAS
 * @property string|null $PROPIETARIO
 * @property string|null $NUMPLACA
 * @property string|null $MARCA
 * 
 * @property Placa $placa
 *
 * @package App\Models
 */
class Vehiculo extends Model
{
	protected $table = 'vehiculos';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'IDPLACAS' => 'int'
	];

	protected $fillable = [
		'IDPLACAS',
		'PROPIETARIO',
		'NUMPLACA',
		'MARCA'
	];

	public function placa()
	{
		return $this->belongsTo(Placa::class, 'IDPLACAS');
	}
}
