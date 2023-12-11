<h1>Detalhes do evento</h1>

<h1>
    {{ $evento->nome_evento }}
</h1>
<h1>
    {{ $evento->data_hora }}
</h1>
<h1>
    {{ $evento->categoria }}
</h1>
<h1>
    {{ $evento->inscricao }}
</h1>
<h1>
    {{ $evento->kit }}
</h1>
<h1>
    {{ $evento->detalhes_entrega_kit }}
</h1>

<hr>

<h1>Detalhes do usuario</h1>

<h1>{{ auth()->user()->nome_usuario }}</h1>
<h1>{{ auth()->user()->data_nascimento }}</h1>
<h1>{{ auth()->user()->cpf }}</h1>
<h1>{{ auth()->user()->email }}</h1>
<h1>{{ auth()->user()->sexo }}</h1>

@include('subscribe.inscricao')
