<?php 
   include("php/conexion.php");
   conectar();
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Concurso de disfraces de Halloween</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Ver Disfraces</a></li>
            <li><a href="index.php?modulo=procesar_registro">Registro</a></li>
            <li><a href="index.php?modulo=procesar_login">Iniciar Sesión</a></li>
            <li><a href="index.php?modulo=login">Panel de Administración</a></li>
        </ul>
    </nav>
    <header>
        <h1>Concurso de disfraces de Halloween</h1>
        <?php 
            if(!empty($_SESSION['nombre_usuario']))
            {
                ?>
                <p>Hola <?php echo $_SESSION['nombre_usuario'];?>. usted tiene el ID: <?php echo $_SESSION['id'];?></p>
                <a href="index.php?modulo=procesar_login&salir=ok">SALIR</a>
                <?php
            }
        ?>
    </header>
    <main>
        <?php 
            if(isset($_GET["modulo"])){
                include("php/$_GET[modulo].php");
            };

            
        ?>
        <!-- <section id="disfraces-list" class="section">
            Aquí se mostrarán los disfraces
            
            <div class="disfraz">
                <h2>Disfraz 1</h2>
                <p>Descripción del Disfraz 1</p>
                <p><img src="imagenes/fondo.jpg" width="100%"></p>
                <button class="votar">Votar</button>
            </div>
            <hr>
            <div class="disfraz">
                <h2>Disfraz 2</h2>
                <p>Descripción del Disfraz 2</p>
                <p><img src="imagenes/fondo.jpg" width="100%"></p>
                <button class="votar">Votar</button>
            </div>
             Repite la estructura para más disfraces 
        
        </section> -->
    </main>
    <script src="js/script.js"></script>
</body>
</html>
