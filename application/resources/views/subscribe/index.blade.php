    @extends('components.layout')

@section('title', 'Inscrever-se no evento')


@section('content')
<div class="mt-8 flex flex-col items-center">
    <h1 class="mb-8 mt-10 text-2xl font-extrabold leading-none tracking-tight text-gray-900 ml-3">
    Detalhes do evento
    </h1>

    <h1 class="mb-8 mt-10 text-2xl font-bold leading-none tracking-tight text-gray-900 ml-3">
            {{$evento->nome_evento}}
    </h1>

    Kits:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {!! nl2br(str_replace(' - ', "\n", $evento->kit)) !!}
    </h1>

    Data e Hora do Evento:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{ \Carbon\Carbon::parse($evento->data_hora)->format('d/m/Y H:i') }}h
    </h1>
    Inscrição:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {!! nl2br(str_replace('.', "\n", $evento->inscricao)) !!}
    </h1>   

    <h1 class="mb-8 mt-10 text-2xl font-extrabold leading-none tracking-tight text-gray-900 ml-3">
        Detalhes do usuario
    </h1>

    Nome:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{ auth()->user()->nome_usuario }}
    </h1>
    CPF:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{ chunk_split(auth()->user()->cpf, 3, '.') }}  
    </h1>
    Data de Nascimento:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{ \Carbon\Carbon::parse(auth()->user()->data_nascimento)->format('d/m/Y') }}
    </h1>
    Email:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{ auth()->user()->email }}
    </h1>
    Sexo:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{ auth()->user()->sexo }}
    </h1>

    <div>

        <a href="{{route('index')}}"><button type="submit"
            class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-red-900 dark:focus:ring-blue-900">
            Voltar
        </a>
        <form action="{{ route('subscribe.store', $evento) }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 ml-3 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-red-900 dark:focus:ring-blue-900">Confirmar Inscrição</button>
        </form>
    </div>
    
</div>


@endsection