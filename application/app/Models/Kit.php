<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Kit
 * 
 * @property int $id_kit
 * @property string $nome
 * 
 * @property Collection|Evento[] $eventos
 *
 * @package App\Models
 */
class Kit extends Model
{
	protected $table = 'kit';
	protected $primaryKey = 'id_kit';
	public $timestamps = false;

	protected $fillable = [
		'nome'
	];

	public function eventos()
	{
		return $this->belongsToMany(Evento::class, 'evento_kit', 'fk_idkit', 'fk_idevento');
	}
}
