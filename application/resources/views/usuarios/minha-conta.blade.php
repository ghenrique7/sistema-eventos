@extends('components.layout')

@section('title', 'Minha Conta')

@section('content')
    <div>
        <h1 class="mb-8  text-3xl font-extrabold leading-none tracking-tight text-gray-900">
            Meus Dados
        </h1>
        <div class="grid gap-6 mb-6  md:grid-cols-3 ">
            <div>
                <label for="nome_usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                <input type="text" name="nome_usuario"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John" value="{{ $usuario->nome_usuario }}" readonly>
            </div>
            <div>
                <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
                <input type="text" name="cpf"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="00000000000" value="{{ $usuario->cpf }}" readonly>
            </div>
            <div>
                <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                <input type="text" name="sexo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $usuario->sexo }}" readonly>
            </div>
            <div>
                <label for="data_nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de
                    Nascimento</label>
                <input type="datetime-local" name="data_nascimento"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $usuario->data_nascimento }}" readonly>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="nome@email.com" value="{{ $usuario->email }}" readonly>
            </div>
            <div>
                <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP</label>
                <input type="text" name="cep"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="00000000" value="{{ $usuario->cep }}" readonly>
            </div>
            <div>
                <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
                <input type="text" name="cidade"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Santarém" value="{{ $usuario->cidade }}" readonly>
            </div>
            <div>
                <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                <input type="text" name="estado"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="PA" value="{{ $usuario->estado }}" readonly>
            </div>
            <div>
                <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro</label>
                <input type="text" name="bairro"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Aeroporto Velho" value="{{ $usuario->bairro }}" readonly>
            </div>
            <div>
                <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero</label>
                <input type="text" name="numero"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="0000" value="{{ $usuario->numero }}" readonly>
            </div>
            <div>
                <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                <input type="password" name="senha"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="•••••••••" readonly>
            </div>
            <div>
                <label for="senha_confirmation"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar
                    Senha</label>
                <input type="password" name="senha_confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="•••••••••" readonly>
            </div>
        </div>
        @unless (count($usuario->eventos) == 0 || auth()->user()->eh_admin)
            <h1 class="mb-8  text-3xl font-extrabold leading-none tracking-tight text-gray-900">
                Meus Eventos
            </h1>
            <div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Evento
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Data e Hora do Evento
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Situacao
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuario->eventos as $evento)
                                <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $evento->nome_evento }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $evento->data_hora }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $evento->pivot->situacao_inscricao }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    @else
    @auth
    @if(!auth()->user()->eh_admin)
            <h1 class="mb-8 mt-10  text-2xl font-bold leading-none tracking-tight text-gray-900">
                        Você não está inscrito em nenhum evento.
            </h1>
    @endif
    @endauth
    @endunless
    </div>
@endsection
