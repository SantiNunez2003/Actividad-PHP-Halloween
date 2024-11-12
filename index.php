<?php 
   include("php/utils/conexion.php");
   conectar();
   session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Concurso de disfraces de Halloween</title>
    <link rel="stylesheet" href="css/estilos.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include_once("./php/components/navbar.php");
    ?>
    <header>
        <h1>Concurso de disfraces de Halloween</h1>
        <?php 
            if(!empty($_SESSION['nombre_usuario'])){
                ?>
                <p>Hola <?php echo $_SESSION['nombre_usuario'];?>. usted tiene el ID: <?php echo $_SESSION['id'];?></p>
                <a href="index.php?modulo=procesar_login&salir=ok">SALIR</a>
                <?php
            }
        ?>
    </header>
    <main>

        <?php 
            

            if(!empty($_GET['modulo'])){
                
                include("php/pages/$_GET[modulo].php");

            }else{
               
                $sql = "SELECT *FROM disfraces WHERE eliminado=0 ORDER BY votos DESC";

                $sql = mysqli_query($con, $sql);

                if(mysqli_num_rows($sql) != 0){

                    while ($r = mysqli_fetch_array($sql)) 
                    {
                        ?>
                        <section id="disfraces-list" class="section">
                            <!-- Aquí se mostrarán los disfraces -->
                            <div class="disfraz">

                                <h2><?php echo $r['nombre'];?></h2>
                                <p><?php echo $r['descripcion'];?></p>
                                
                                <?php 
                                    //Consulta para contar los votos del disfraz específico
                                    $cant_votos_query = "SELECT * FROM votos WHERE id_disfraz = " . $r['id'];
                                    $cant_votos_result = mysqli_query($con, $cant_votos_query);

                                    // Verifica si la consulta tuvo resultados
                                    if ($cant_votos_result) {
                                        $num_votos = mysqli_num_rows($cant_votos_result);

                                        // Muestra el número de votos
                                        if ($num_votos == 0) {
                                            echo "<p>Votos: 0</p>";
                                        } else {
                                            echo "<p>Votos: " . $num_votos . "</p>";
                                        }
                                    } else {
                                        echo "<p>Error en la consulta de votos.</p>";
                                    }
                                ?>

                                <?php
                                if(file_exists('imagenes/'.$r['foto'])){
                                    //unlink('imagenes/'.$r['foto']);//borro las fotos
                                    ?>
                                        <p><img src="imagenes/<?php echo $r['foto'];?>" width="100%"></p>
                                        <!--<p>FOTO BLOB</p>
                                        <p><img src="modulos/mostrar_foto.php?id=<?php //echo $r['id'];?>" width="100%"></p>-->
                                    <?php 

                                }else{

                                    echo "<p>Sin fotos</p>";
                                }
                                ?>
                                
                                <?php
                                if(!empty($_SESSION['nombre_usuario'])){

                                    //consulto si el usuario voto por el disfraz
                                    $sql_votos = "SELECT *FROM votos where id_disfraz=".$r['id']." and id_usuario=".$_SESSION['id'];
                                    $sql_votos = mysqli_query($con, $sql_votos);
                                    if(mysqli_num_rows($sql_votos) == 0)
                                    {
                                        ?>
                                            <button class="votar" id="votarBoton<?php echo $r['id'];?>" onclick="votar(<?php echo $r['id'];?>)">Votar</button>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <!-- Repite la estructura para más disfraces -->
                        </section>
                        <?php
                    }

                }else{
                    ?>
                    <section id="disfraces-list" class="section">
                        <!-- Aquí se mostrarán los disfraces -->
                        <div class="disfraz">
                            <h2>No hay datos.</h2>
                        </div> 
                        <!-- Repite la estructura para más disfraces -->
                    </section>
                    <?php
                }

            }  
        ?>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
