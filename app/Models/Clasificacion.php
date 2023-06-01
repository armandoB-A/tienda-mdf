<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Clasificacion
 * 
 * @property int $id_clasificacion
 * @property float $numero_espesor
 * @property string $dscripcion_clasificacion
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Clasificacion extends Model
{
	protected $table = 'clasificacion';
	protected $primaryKey = 'id_clasificacion';
	public $timestamps = false;

	protected $casts = [
		'numero_espesor' => 'float'
	];

	protected $fillable = [
		'numero_espesor',
		'dscripcion_clasificacion'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'id_clasificacion');
	}
}
