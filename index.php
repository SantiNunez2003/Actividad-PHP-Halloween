<?php 
   include("php/conexion.php");
   conectar();
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
            <li><a href="index.php?modulo=registro">Registro</a></li>
            <li><a href="index.php?modulo=login">Iniciar Sesión</a></li>
            <li><a href="index.php?modulo=login">Panel de Administración</a></li>
        </ul>
    </nav>
    <header>
        <h1>Concurso de disfraces de Halloween</h1>
    </header>
    <main>
        <?php 
            if(isset($_GET["modulo"])){
                include("php/$_GET[modulo].php");
            };
        ?>
        <section id="disfraces-list" class="section">
            <!-- Aquí se mostrarán los disfraces -->
            
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
            <!-- Repite la estructura para más disfraces -->
        
        </section>
        
        
        <!-- <section id="admin" class="section">
            <h2>Panel de Administración</h2>
            <form action="procesar_disfraz.php" method="POST">
                <label for="disfraz-nombre">Nombre del Disfraz:</label>
                <input type="text" id="disfraz-nombre" name="disfraz-nombre" required>
                
                <label for="disfraz-descripcion">Descripción del Disfraz:</label>
                <textarea id="disfraz-descripcion" name="disfraz-descripcion" required></textarea>
                
                <label for="disfraz-nombre">Foto:</label>
                <input type="file" id="disfraz-foto" name="disfraz-foto" required>

                <button type="submit">Agregar Disfraz</button>
            </form>
        </section> -->
    </main>
    <script src="js/script.js"></script>
</body>
</html>
