<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OtrosProducto
 * 
 * @property int $id_otros_productos
 * @property string $nombre_otro_producto
 * @property float $precio_otro_producto
 * @property string $descripcion_otros_productos
 * 
 * @property Collection|DetallePedido[] $detalle_pedidos
 * @property Collection|DetalleVentaProducto[] $detalle_venta_productos
 *
 * @package App\Models
 */
class OtrosProducto extends Model
{
	protected $table = 'otros_productos';
	protected $primaryKey = 'id_otros_productos';
	public $timestamps = false;

	protected $casts = [
		'precio_otro_producto' => 'float'
	];

	protected $fillable = [
		'nombre_otro_producto',
		'precio_otro_producto',
		'descripcion_otros_productos'
	];

	public function detalle_pedidos()
	{
		return $this->hasMany(DetallePedido::class, 'id_producto');
	}

	public function detalle_venta_productos()
	{
		return $this->hasMany(DetalleVentaProducto::class, 'id_prodcuto');
	}
}
