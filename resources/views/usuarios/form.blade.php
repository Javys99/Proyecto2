<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=" {{ url('/usuarios/form') }} " method="post" enctype="multipart/form-data">
@csrf

<label for="nombre"> Nombre </label>
<input type="text" name="nombre" value="{{ isset($usuario->nombre)?$usuario->nombre:old('nombre') }}" id="nombre">
<br>
<!--

<label for="apellido_paterno"> Apellido Paterno </label>
<input type="text" name="apellido_paterno" value="{{ isset($usuario->apellido_paterno)?$usuario->apellido_paterno:old('apellido_paterno') }}" id="apellido_paterno">
<br>

<label for="apellido_materno"> Apellido Materno </label>
<input type="text" name="apellido_materno" value="{{ isset($usuario->apellido_materno)?$usuario->apellido_materno:old('apellido_materno') }}" id="apellido_materno">
<br>

<label for="correo"> Correo </label>
<input type="text" name="correo" value="{{ isset($usuario->correo)?$usuario->correo:old('correo') }}" id="correo">
<br>

 -->


<input type="submit" value="Guardar" id="guardar">
</form>
</body>
</html>