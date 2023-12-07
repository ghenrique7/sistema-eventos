@extends('components.layout')

@section('title', 'Minha Conta')

@section('content')
    <h1>
        Minha conta
    </h1>

    <h1>{{$usuario->nome_usuario}}</h1>
    <h1>{{$usuario->data_nascimento}}</h1>
    <h1>{{$usuario->cpf}}</h1>
    <h1>{{$usuario->email}}</h1>
    <h1>{{$usuario->sexo}}</h1>
    <h1>{{$usuario->cep}}</h1>
    <h1>{{$usuario->bairro}}</h1>
    <h1>{{$usuario->cidade}}</h1>
    <h1>{{$usuario->estado}}</h1>
    <h1>{{$usuario->numero}}</h1>
@endsection
