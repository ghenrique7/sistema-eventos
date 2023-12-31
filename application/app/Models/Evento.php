<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property int $id_evento
 * @property string $nome_evento
 * @property string|null $descricao
 * @property string $premiacao
 * @property int $total_participante
 * @property string $situacao
 * @property string|null $imagem_arte
 * @property string $detalhe_entrega_kit
 * @property int $fk_idmodalidade
 * @property Carbon $data_hora
 *
 * @property Modalidade $modalidade
 * @property Collection|Categoria[] $categoria
 * @property Collection|Kit[] $kits
 * @property Collection|ParticipanteEvento[] $participante_eventos
 *
 * @package App\Models
 */
class Evento extends Model
{
    protected $table = 'evento';
    protected $primaryKey = 'id_evento';
    public $timestamps = false;

    protected $casts = [
        'total_participante' => 'int',
        'fk_idmodalidade' => 'int',
        'data_hora' => 'datetime'
    ];

    protected $fillable = [
        'nome_evento',
        'descricao',
        'premiacao',
        'total_participante',
        'situacao',
        'kit',
        'categoria',
        'distancia',
        'inscricao',
        'imagem_arte',
        'detalhe_entrega_kit',
        'fk_idmodalidade',
        'data_hora'
    ];

    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class, 'fk_idmodalidade');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'participante_evento', 'fk_idevento', 'fk_idusuario')
            ->withPivot(['situacao_inscricao']);
    }
}
