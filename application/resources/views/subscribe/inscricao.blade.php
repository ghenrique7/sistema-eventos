<form action="{{ route('subscribe.store', $evento) }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Confirmar Inscrição</button>
</form>
