<?php

namespace App\Http\Controllers\Event;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventos = Evento::get();
        $usuario = auth()->user();
        return view('index', compact('eventos', 'usuario'));
    }

    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
    }

    public function edit(Evento $evento)
    {
    }

    public function update(Request $request, Evento $evento)
    {
        //
    }

    public function destroy(Evento $evento)
    {
        //
    }
}
