<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallePedido
 * 
 * @property int $id_detalle_pedido
 * @property int $id_pedidos
 * @property int $id_producto
 * @property int $cantidad_pedido
 * @property float $precio_cantidad
 * 
 * @property OtrosProducto $otros_producto
 * @property Pedido $pedido
 * @property Producto $producto
 *
 * @package App\Models
 */
class DetallePedido extends Model
{
	protected $table = 'detalle_pedido';
	protected $primaryKey = 'id_detalle_pedido';
	public $timestamps = false;

	protected $casts = [
		'id_pedidos' => 'int',
		'id_producto' => 'int',
		'cantidad_pedido' => 'int',
		'precio_cantidad' => 'float'
	];

	protected $fillable = [
		'id_pedidos',
		'id_producto',
		'cantidad_pedido',
		'precio_cantidad'
	];

	public function otros_producto()
	{
		return $this->belongsTo(OtrosProducto::class, 'id_producto');
	}

	public function pedido()
	{
		return $this->belongsTo(Pedido::class, 'id_pedidos');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_producto');
	}
}
