<nav>
    <ul>
        <li><a href="index.php">Ver Disfraces</a></li>
        <li><a href="index.php?modulo=procesar_registro">Registro</a></li>
        <li><a href="index.php?modulo=procesar_login">Iniciar Sesión</a></li>
        <li><a href='index.php?modulo=admin'>Panel de Administración</a></li>  
        <?php /* echo isset($_SESSION["id"]) ? "<li><a href='index.php?modulo=procesar_login?salir=ok'>Salir</a></li>" : "" */?>
    </ul>
</nav>