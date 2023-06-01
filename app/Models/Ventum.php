<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventum
 * 
 * @property int $id_venta
 * @property float $total_venta
 * @property int $id_empleado
 * 
 * @property Empleado $empleado
 * @property Collection|DetalleVentaProducto[] $detalle_venta_productos
 *
 * @package App\Models
 */
class Ventum extends Model
{
	protected $table = 'venta';
	protected $primaryKey = 'id_venta';
	public $timestamps = false;

	protected $casts = [
		'total_venta' => 'float',
		'id_empleado' => 'int'
	];

	protected $fillable = [
		'total_venta',
		'id_empleado'
	];

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_empleado');
	}

	public function detalle_venta_productos()
	{
		return $this->hasMany(DetalleVentaProducto::class, 'id_venta');
	}
}
