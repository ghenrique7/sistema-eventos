<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelefoneUsuario
 * 
 * @property int $fk_idusuario
 * @property string $telefone
 * 
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class TelefoneUsuario extends Model
{
	protected $table = 'telefone_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fk_idusuario' => 'int'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'fk_idusuario');
	}
}
