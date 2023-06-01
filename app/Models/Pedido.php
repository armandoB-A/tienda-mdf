<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 * 
 * @property int $id_pedidos
 * @property Carbon $fecha_pedido
 * @property Carbon $fecha_entrega
 * @property float $total_pedido
 * @property int $id_empleado
 * @property float $anticipo_pedido
 * @property string $nombre_cliente
 * @property int $telefono_cliente
 * 
 * @property Collection|DetallePedido[] $detalle_pedidos
 *
 * @package App\Models
 */
class Pedido extends Model
{
	protected $table = 'pedidos';
	protected $primaryKey = 'id_pedidos';
	public $timestamps = false;

	protected $casts = [
		'fecha_pedido' => 'datetime',
		'fecha_entrega' => 'datetime',
		'total_pedido' => 'float',
		'id_empleado' => 'int',
		'anticipo_pedido' => 'float',
		'telefono_cliente' => 'int'
	];

	protected $fillable = [
		'fecha_pedido',
		'fecha_entrega',
		'total_pedido',
		'id_empleado',
		'anticipo_pedido',
		'nombre_cliente',
		'telefono_cliente'
	];

	public function detalle_pedidos()
	{
		return $this->hasMany(DetallePedido::class, 'id_pedidos');
	}
}
