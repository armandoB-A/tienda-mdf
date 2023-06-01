<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 * 
 * @property string $rfc_proveedor
 * @property string $direccion_proveedor
 * @property string $correo_proveedor
 * @property int $telefono_proveedor
 * @property bool $status_proveedor
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Proveedor extends Model
{
	protected $table = 'proveedor';
	protected $primaryKey = 'rfc_proveedor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'telefono_proveedor' => 'int',
		'status_proveedor' => 'bool'
	];

	protected $fillable = [
		'direccion_proveedor',
		'correo_proveedor',
		'telefono_proveedor',
		'status_proveedor'
	];

	public function productos()
	{
		return $this->belongsToMany(Producto::class, 'proveedor_producto', 'rfc_proveedor', 'id_producto')
					->withPivot('id_proveedor_producto', 'cantidad_proveedor_producto');
	}
}
