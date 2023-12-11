@extends('components.layout')

@section('title', 'Criar Evento')

@section('content')

    <form class="max-w-md mx-auto" action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="nome_evento"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ old('nome_evento') }}" />
            <label for="nome_evento"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome
                do evento</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
            <textarea id="descricao" name="descricao" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Descrição">{{ old('descricao') }}</textarea>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="premiacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Premiação</label>
            <textarea id="premiacao" name="premiacao" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Premiação">{{ old('premiacao') }}</textarea>
        </div>
        <div class="grid md:grid-cols-2 md:gap-3">
            <div class="relative z-0 w-full mb-5 group">
                <label for="quantity-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total de
                    Participantes</label>
                <div class="relative flex items-center max-w-[8rem]">
                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                        class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" name="total_participante" id="quantity-input" data-input-counter
                        aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="999" required value="{{ old('total_participante') }}">
                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                        class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imagem_arte">Upload de
                    Imagem</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" name="imagem_arte" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG (MAX. 800x400px).</p>
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="kit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kits</label>
            <textarea required id="kit" name="kit" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Kits do evento">{{ old('kit') }}</textarea>
        </div>
        <div class="grid md:grid-cols-1 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="detalhe_entrega_kit"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detalhes da entrega do kit</label>
                <textarea id="detalhe_entrega_kit" name="detalhe_entrega_kit" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('detalhe_entrega_kit') }}" placeholder="Entrega do kit"></textarea>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6 mb-4">
            <div>
                <label for="data_hora">Data e Hora do evento</label>
                <input type="datetime-local" id="data_hora" name="data_hora" class="mt-4" required />
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
            <textarea id="categoria" name="categoria" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Categorias do evento">{{ old('categoria') }}</textarea>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="distancia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Distancia</label>
            <textarea required id="distancia" name="distancia" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Distancia do percurso">{{ old('distancia') }}</textarea>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="inscricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Inscrição</label>
            <textarea id="inscricao" name="inscricao" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Valor da inscrição">{{ old('inscricao') }}</textarea>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6 mb-4">
            <div>
                <label for="fk_idmodalidade"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modalidade
                    Evento</label>
                <select id="fk_idmodalidade" name="fk_idmodalidade"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                    @foreach ($modalidades as $modalidade)
                        <option value="{{ $modalidade->id_modalidade }}">{{ $modalidade->modalidade }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="nova_modalidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nova
                    Modalidade</label>
                <input type="text" id="nova_modalidade" name="nova_modalidade">
            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Criar
            Evento</button>
    </form>


@endsection
