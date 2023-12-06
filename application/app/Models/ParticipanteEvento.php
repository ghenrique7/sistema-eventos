<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParticipanteEvento
 * 
 * @property int $fk_idusuario
 * @property int $fk_idevento
 * @property string $situacao_inscricao
 * 
 * @property Usuario $usuario
 * @property Evento $evento
 *
 * @package App\Models
 */
class ParticipanteEvento extends Model
{
	protected $table = 'participante_evento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fk_idusuario' => 'int',
		'fk_idevento' => 'int'
	];

	protected $fillable = [
		'situacao_inscricao'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'fk_idusuario');
	}

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'fk_idevento');
	}
}
