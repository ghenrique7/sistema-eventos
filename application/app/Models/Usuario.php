<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usuario
 * @property string $nome_usuario
 * @property string $cpf
 * @property string $email
 * @property string $sexo
 * @property string $cep
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $numero
 * @property string $tipo_usuario
 * @property Carbon $data_nascimento
 * 
 * @property Collection|TelefoneUsuario[] $telefone_usuarios
 * @property Collection|ParticipanteEvento[] $participante_eventos
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $casts = [
		'data_nascimento' => 'datetime'
	];

	protected $fillable = [
		'nome_usuario',
		'cpf',
		'email',
		'sexo',
		'cep',
		'bairro',
		'cidade',
		'estado',
		'numero',
		'tipo_usuario',
		'data_nascimento'
	];

	public function telefone_usuarios()
	{
		return $this->hasMany(TelefoneUsuario::class, 'fk_idusuario');
	}

	public function participante_eventos()
	{
		return $this->hasMany(ParticipanteEvento::class, 'fk_idusuario');
	}
}
