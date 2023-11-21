<form method="post" action="{{ url('/usuarios') }}" enctype="multipart/form-data">
    @csrf
    @include('usuarios.form')
</form>