@extends('components.layout')

@section('title', 'Detalhes do Evento')

@section('header')
<div class="flex items-center justify-center">
    <div class="flex-none">
        <img class="rounded-t-lg mr-3 h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
        src="{{ $evento->imagem_arte ? asset('storage/' . $evento->imagem_arte) : asset('/images/no-image.png') }}"
        alt="" />
    </div>
    <div class="flex-grow">
        <h1 class="mb-8 mt-10 text-2xl leading-none tracking-tight text-gray-900 ml-3">
            {{$evento->nome_evento}}
        </h1>
        <p class="text-1xl leading-none tracking-tight text-gray-400 ml-3">
            {{$evento->modalidade->modalidade}}
        </p>
    </div>
</div>
@endsection
@section('content')
<div class="mt-8">
    <h1 class="mb-8 mt-10 text-2xl font-extrabold leading-none tracking-tight text-gray-900 ml-3">
        Dados do evento
    </h1>
    Total de Participantes:
    <h1 class="mb-8 mt-4 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{$evento->total_participante}}
    </h1>
    Kits:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {!! nl2br(str_replace(' - ', "\n", $evento->kit)) !!}
    </h1>
    Data e Hora do Evento:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {{ \Carbon\Carbon::parse($evento->data_hora)->format('d/m/Y H:i') }}h
    </h1>
    Distância:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {!! nl2br(str_replace(' . ', "\n", $evento->distancia)) !!}
    </h1>
    Inscrição:
    <h1 class="mb-8 text-1xl leading-none tracking-tight text-gray-900 ml-3">
        {!! nl2br(str_replace('.', "\n", $evento->inscricao)) !!}
    </h1>
    <div>
        <a href="{{route('index')}}"><button type="submit"
        class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-red-900 dark:focus:ring-blue-900">
        Voltar
    </button></a>

    @auth
    @if(auth()->user()->eh_admin)
        <a href="{{route('event.edit', $evento)}}"><button type="submit"
                class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-red-900 dark:focus:ring-blue-900">
                Editar evento
            </button></a>
    @else
        <a href="{{route('subscribe.index', $evento)}}"><button type="submit"
            class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-red-900 dark:focus:ring-blue-900">
            Inscrever-se
        </button></a>
    @endif
    @endauth
    @guest
    <a href="{{route('subscribe.index', $evento)}}"><button type="submit"
            class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-red-900 dark:focus:ring-blue-900">
            Inscrever-se
        </button></a>   
    @endguest
</div>
</div>
    
@endsection