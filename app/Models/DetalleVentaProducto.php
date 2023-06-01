<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleVentaProducto
 * 
 * @property int $id_dellate_venta
 * @property int $id_venta
 * @property int $id_prodcuto
 * @property int $cantidad_venta
 * @property float $precio_cantidad
 * 
 * @property OtrosProducto $otros_producto
 * @property Producto $producto
 * @property Ventum $ventum
 *
 * @package App\Models
 */
class DetalleVentaProducto extends Model
{
	protected $table = 'detalle_venta_producto';
	protected $primaryKey = 'id_dellate_venta';
	public $timestamps = false;

	protected $casts = [
		'id_venta' => 'int',
		'id_prodcuto' => 'int',
		'cantidad_venta' => 'int',
		'precio_cantidad' => 'float'
	];

	protected $fillable = [
		'id_venta',
		'id_prodcuto',
		'cantidad_venta',
		'precio_cantidad'
	];

	public function otros_producto()
	{
		return $this->belongsTo(OtrosProducto::class, 'id_prodcuto');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_prodcuto');
	}

	public function ventum()
	{
		return $this->belongsTo(Ventum::class, 'id_venta');
	}
}
