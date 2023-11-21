<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <!--
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            --> 
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <!--
            <td>{{ $usuario->apellido_paterno }}</td>
            <td>{{ $usuario->apellido_materno }}</td>
            <td>{{ $usuario->correo }}</td>
            --> 
            <td>
            <a href="{{ url('/usuarios/'.$usuario->id.'/edit' ) }}" >
            Editar
            </a>

            |
               
            <form action="{{ url('/usuarios/'.$usuario->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm ('¿Quieres borrar?')" value="Borrar">

            </form>
        
        </td>
        </tr>
        @endforeach
    </tbody>

</table>
</body>
</html>