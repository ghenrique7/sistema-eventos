<?php

namespace App\Http\Controllers\Admin;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Modalidade;
use DateTime;
use Illuminate\Support\Facades\DB;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::get();
        return view('admin.gerenciar-eventos', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $modalidades = Modalidade::all();
        return view('admin.create', compact('modalidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $formulario = $request->only(['nome_evento', 'descricao', 'premiacao', 'total_participante', 'kit', 'categoria', 'distancia', 'inscricao', 'imagem_arte', 'detalhe_entrega_kit', 'fk_idmodalidade', 'data_hora',]);

        $nova_modalidade = $request->filled('nova_modalidade');

        $data_hora = new DateTime($request['data_hora']);
        $formatar_data_hora = $data_hora->format('Y/m/d H:i:s');
        $formulario['data_hora'] = $formatar_data_hora;


        DB::beginTransaction();

        if ($nova_modalidade) {
            $modalidade = Modalidade::create(['modalidade' => $nova_modalidade]);
            $formulario['fk_idmodalidade'] = $modalidade->id_modalidade;
        }

        if ($request->hasFile('imagem_arte')) {
            $formulario['imagem_arte'] = $request->file('imagem_arte')->store('images', 'public');
        }

        $novoEvento = Evento::create($formulario);

        if (!$novoEvento && !$modalidade) {
            DB::rollBack();
        }

        DB::commit();

        return redirect()->route('event.index')->with('success', 'O evento foi adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        $modalidades = Modalidade::get();
        return view('admin.edit', compact('evento', 'modalidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        $formulario = $request->only(['nome_evento', 'descricao', 'premiacao', 'total_participante', 'kit', 'categoria', 'distancia', 'inscricao', 'imagem_arte', 'detalhe_entrega_kit', 'fk_idmodalidade', 'data_hora',]);

        $updateEvento = $evento->update($formulario);

        if ($updateEvento) {
            return back()->with('success', 'O evento foi editado com sucesso.');
        }

        return back()->with('error', 'O evento não foi atualizado. Tente novamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {

        $evento->usuarios()->detach($evento->id_evento);
        $evento->delete();

        return redirect()->route('event.index')->with('success', 'O evento foi excluido com sucesso.');
    }
}
