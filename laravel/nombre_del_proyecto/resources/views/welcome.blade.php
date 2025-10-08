<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <h1 class="mb-4">Bienvenido al Sistema</h1>
    <p class="mb-4">Seleccione su tipo de usuario para iniciar sesión:</p>
    <div class="d-flex justify-content-center gap-4">
        <a href="{{ route('empleado.login') }}" class="btn btn-primary btn-lg">Soy Empleado</a>
        <a href="{{ route('cliente.login') }}" class="btn btn-success btn-lg">Soy Cliente</a>
    </div>
</div>
</body>
</html>
