<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Modalidade
 * 
 * @property int $id_modalidade
 * @property string $modalidade
 * 
 * @property Collection|Evento[] $eventos
 *
 * @package App\Models
 */
class Modalidade extends Model
{
	protected $table = 'modalidade';
	protected $primaryKey = 'id_modalidade';
	public $timestamps = false;

	protected $fillable = [
		'modalidade'
	];

	public function eventos()
	{
		return $this->hasMany(Evento::class, 'fk_idmodalidade');
	}
}
