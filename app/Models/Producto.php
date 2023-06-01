<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id_producto
 * @property string $nombre_producto
 * @property int $id_clasificacion
 * @property float $precio_venta
 * @property int $id_categoria
 * @property int $stock_minimo
 * @property int $stock_maximo
 * @property int $existencias
 * @property bool $status
 * 
 * @property Categorium $categorium
 * @property Clasificacion $clasificacion
 * @property Collection|DetallePedido[] $detalle_pedidos
 * @property Collection|DetalleVentaProducto[] $detalle_venta_productos
 * @property Collection|Proveedor[] $proveedors
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	protected $primaryKey = 'id_producto';
	public $timestamps = false;

	protected $casts = [
		'id_clasificacion' => 'int',
		'precio_venta' => 'float',
		'id_categoria' => 'int',
		'stock_minimo' => 'int',
		'stock_maximo' => 'int',
		'existencias' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'nombre_producto',
		'id_clasificacion',
		'precio_venta',
		'id_categoria',
		'stock_minimo',
		'stock_maximo',
		'existencias',
		'status'
	];

	public function categorium()
	{
		return $this->belongsTo(Categorium::class, 'id_categoria');
	}

	public function clasificacion()
	{
		return $this->belongsTo(Clasificacion::class, 'id_clasificacion');
	}

	public function detalle_pedidos()
	{
		return $this->hasMany(DetallePedido::class, 'id_producto');
	}

	public function detalle_venta_productos()
	{
		return $this->hasMany(DetalleVentaProducto::class, 'id_prodcuto');
	}

	public function proveedors()
	{
		return $this->belongsToMany(Proveedor::class, 'proveedor_producto', 'id_producto', 'rfc_proveedor')
					->withPivot('id_proveedor_producto', 'cantidad_proveedor_producto');
	}
}
