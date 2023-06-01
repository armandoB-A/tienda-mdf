<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property int $id_empleado
 * @property string $nombre_empleado
 * @property string $apellido_empleado
 * @property string $direccion_empleado
 * @property int $telefono_empleado
 * @property int $id_rol
 * 
 * @property Rol $rol
 * @property Collection|Ventum[] $venta
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleado';
	protected $primaryKey = 'id_empleado';
	public $timestamps = false;

	protected $casts = [
		'telefono_empleado' => 'int',
		'id_rol' => 'int'
	];

	protected $fillable = [
		'nombre_empleado',
		'apellido_empleado',
		'direccion_empleado',
		'telefono_empleado',
		'id_rol'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'id_rol');
	}

	public function venta()
	{
		return $this->hasMany(Ventum::class, 'id_empleado');
	}
}
