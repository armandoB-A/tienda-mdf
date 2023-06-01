<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProveedorProducto
 * 
 * @property int $id_proveedor_producto
 * @property string $rfc_proveedor
 * @property int $id_producto
 * @property int $cantidad_proveedor_producto
 * 
 * @property Producto $producto
 * @property Proveedor $proveedor
 *
 * @package App\Models
 */
class ProveedorProducto extends Model
{
	protected $table = 'proveedor_producto';
	protected $primaryKey = 'id_proveedor_producto';
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'cantidad_proveedor_producto' => 'int'
	];

	protected $fillable = [
		'rfc_proveedor',
		'id_producto',
		'cantidad_proveedor_producto'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_producto');
	}

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'rfc_proveedor');
	}
}
