<?php

namespace App\Http\Controllers\Subscribe;

use App\Models\Evento;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SubscribeEventController extends Controller
{
    //

    public function index(Evento $evento)
    {
        return view('subscribe.index', compact('evento'));
    }

    public function store(Evento $evento)
    {
        DB::beginTransaction();
        $usuario = Usuario::find(auth()->user()->id_usuario);

        if ($usuario) {
            $usuario->eventos()->attach($evento->id_evento);
            DB::commit();
            return redirect()->route('index')->with('success', 'Usuario inscrito no evento com sucesso');
        }


        DB::rollBack();
        return redirect()->route('subscribe.index')->with('error', 'Usuário não foi inscrito no evento.');
    }
}
