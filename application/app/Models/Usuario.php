<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


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
class Usuario extends Authenticatable
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
        'eh_admin',
        'senha',
        'data_nascimento'
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function telefone_usuarios()
    {
        return $this->hasMany(TelefoneUsuario::class, 'fk_idusuario');
    }

    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'participante_evento', 'fk_idusuario', 'fk_idevento')
            ->withPivot(['situacao_inscricao']);;
    }
}
