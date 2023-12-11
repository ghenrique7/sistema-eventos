@extends('components.layout')

@section('title', 'Inicio')

@section('content')

    @unless (count($eventos) == 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($eventos as $evento)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-10 ">
                    <a href="{{ route('event.show', $evento) }}">
                        <img class="rounded-t-lg h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="{{ $evento->imagem_arte ? asset('storage/' . $evento->imagem_arte) : asset('/images/no-image.png') }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('event.show', $evento) }}">
                            <h5 class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                                {{ $evento->nome_evento }}</h5>
                        </a>
                        <p class="mb-2 text-1xl  tracking-tight text-gray-700 dark:text-white text-center"> Santarém - PA
                        </p>
                        @auth
                            @if (!auth()->user()->eh_admin)
                                <div class="text-center">
                                    <a href="{{ route('subscribe.index', $evento) }}"><button type="submit"
                                            class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-900 dark:focus:ring-blue-900">Inscrever-se</button></a>
                                </div>
                            @endif
                        @endauth
                        @guest
                                <div class="text-center">
                                <a href="{{ route('subscribe.index', $evento) }}"><button type="submit"
                                        class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-900 dark:focus:ring-blue-900">Inscrever-se</button></a>
                            </div>
                        @endguest
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="max-w-sm flex items-center h-screen">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="ml-2 text-2xl font-bold">Poxa! Sem eventos cadastrados.</p>
        </div>
    @endunless

@endsection
