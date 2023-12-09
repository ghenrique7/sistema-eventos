@extends('components.layout')

@section('title', 'Login')

@section('errors')

    <x-flash-messages />

@endsection

@section('content')
    <div>
        <div>
            <button type="submit"
                class="text-black bg-yellow-300 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-dark-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mb-6">
                <a href="{{ route('cadastro.create') }}" class="mx-4">Não tenho cadastro</a>
            </button>
        </div>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <div class="grid gap-6 mb-6">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="nome@email.com" value="{{ old('email') }}" required>
                </div>
                <div>
                    <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                    <input type="password" name="senha"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ old('senha') }}" required>
                </div>
                <div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Entrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
