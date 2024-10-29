Crea una página de inicio de sesión (login.php) que permita a 
los usuarios iniciar sesión con su nombre de usuario y contraseña.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <section id="login" class="section">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="POST">
            
            <label for="login-username">Nombre de Usuario:</label>
            <input type="text" id="login-username" name="login-username" required>
            
            <label for="login-password">Contraseña:</label>
            <input type="password" id="login-password" name="login-password" required>
            
            <button type="submit">Iniciar Sesión</button>
        </form>
    </section>
</body>
</html>