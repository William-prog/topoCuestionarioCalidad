<form action="{{ url('/registroFormulario') }}" method="post">
    @csrf
    @include('formulario.form');
</form>
