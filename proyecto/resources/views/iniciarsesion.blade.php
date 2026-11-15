<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <form method="POST">
        @csrf
        <label for="email">Correo electrónico:</label>
        <input id="email" name="email" type="email" required>

        <label for="password">Contraseña:</label>
        <input id="password" name="password" type="password" required>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
