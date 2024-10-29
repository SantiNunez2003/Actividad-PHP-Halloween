<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <section id="registro" class="section componente-centrado">
        <h2>Registro</h2>
        <form action="index.php?modulo=procesar_registro" method="POST">
            
            <label for="nombre">Nombre de Usuario:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" required>
            
            <button type="submit">Registrarse</button>
        </form>
    </section>
</body>
</html>