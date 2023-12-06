<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property int $id_categoria
 * @property string $nome_categoria
 * @property string $preco_inscricao
 * @property string $distancia
 * @property int $fk_idevento
 *
 * @property Evento $evento
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categoria';
	protected $primaryKey = 'id_categoria';
	public $timestamps = false;

	protected $casts = [
		'fk_idevento' => 'int'
	];

	protected $fillable = [
		'nome_categoria',
		'preco_inscricao',
		'distancia',
		'fk_idevento'
	];

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'fk_idevento');
	}
}
