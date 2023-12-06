@extends('components.layout')


@section('title', 'Cadastro')

@foreach ($errors->all() as $message) {
    {{$message}}
}
@endforeach


@section('content')

<form action="{{route('usuarios.store')}}" method="POST">
    @csrf
    <div class="grid gap-6 mb-6  md:grid-cols-3 ">
        <div>
            <label for="nome_usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
            <input type="text" name="nome_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" value="{{old('nome_usuario')}}" required>
        </div>
        <div>
            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
            <input type="text" name="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="00000000000" value="{{old('cpf')}}" required>
        </div>  
        <div>
            <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
            <select name="sexo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('sexo')}}" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>
        <div>
            <label for="data_nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('data_nascimento')}}" required>
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nome@email.com" value="{{old('email')}}" required>
        </div>
        <div>
            <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP</label>
            <input type="text" name="cep" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="00000000" value="{{old('cep')}}" required>
        </div>
        <div >
            <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
            <input type="text" name="cidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Santarém" value="{{old('cidade')}}" required>
        </div>
        <div >
            <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
            <input type="text" name="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="PA" value="{{old('estado')}}"  required>
        </div>
        <div >
            <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro</label>
            <input type="text" name="bairro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aeroporto Velho" value="{{old('bairro')}}"  required>
        </div>
        <div >
            <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero</label>
            <input type="text" name="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0000" value="{{old('numero')}}"  required>
        </div>   
        <div>
            <label for="tipo_usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Usuario</label>
            <select name="tipo_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('tipo_usuario')}}" required>
                <option value="Administrador">Administrador</option>
                <option value="Participante">Participante</option>
            </select>
        </div>
        <div >
            <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
            <input type="password" name="senha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
        </div> 
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
</form>