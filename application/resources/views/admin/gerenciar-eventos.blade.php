@extends('components.layout')

@section('title', 'Gerenciar Eventos')

@section('header')
    <div class="flex justify-end items-center mr-4 pr-4">
        <a href="{{ route('event.create') }}">
            <button
                class="text-white bg-green-600 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-900 dark:focus:ring-blue-900">
                Criar novo evento
            </button>
        </a>
    </div>
@endsection

@section('content')
    <div class=" h-screen">

        @unless (count($eventos) == 0)
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Imagem</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Evento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total de Vagas Disponiveis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Inscrição
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventos as $evento)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4">
                                    <img src="{{ $evento->imagem_arte ? asset('storage/' . $evento->imagem_arte) : asset('/images/no-image.png') }}"
                                        class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ $evento->nome_evento }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white  text-center">
                                    {{ $evento->total_participante }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ \Illuminate\Support\Str::limit($evento->inscricao, 30, '...') }}                                </td>
                                <td>
                                    <form action="{{ route('event.destroy', $evento) }}" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja apagar o evento? Ele apagará mesmo que hajam usuários inscritos!')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-white bg-red-900 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-900 dark:focus:ring-blue-900">
                                            Apagar
                                        </button>
                                    </form>
                                </td>
                                <td><a href="{{ route('event.edit', $evento) }}"> <button type="submit"
                                            class="text-white bg-blue-900 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-900 dark:focus:ring-blue-900 ml-2">
                                            Editar
                                        </button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="flex items-center mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-8 " fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="ml-2 text-2xl font-bold">Poxa! Sem eventos cadastrados.</p>
            </div>
        @endunless
    </div>
@endsection














{{-- <table>
    <thead>
        <th>Evento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach ($eventos as $evento)
            <tr>
                <td>{{ $evento->nome_evento }}</td>
                <td>
                    <form action="{{ route('event.destroy', $evento) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Apagar</button>
                    </form>
                </td>
                <td><a href="{{ route('event.edit', $evento) }}">Editar</a></td>
            </tr>
        @endforeach
    </tbody>
</table> --}}
