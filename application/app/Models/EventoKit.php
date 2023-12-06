<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventoKit
 * 
 * @property int $fk_idkit
 * @property int $fk_idevento
 * 
 * @property Kit $kit
 * @property Evento $evento
 *
 * @package App\Models
 */
class EventoKit extends Model
{
	protected $table = 'evento_kit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fk_idkit' => 'int',
		'fk_idevento' => 'int'
	];

	public function kit()
	{
		return $this->belongsTo(Kit::class, 'fk_idkit');
	}

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'fk_idevento');
	}
}
