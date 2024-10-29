
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Registro</title>
</head>
<body>
    <?php
        if(isset($_POST['nombre']) && isset($_POST['clave']))
        {
            //verifico que no exista el usuario
            $sql = "SELECT *FROM usuarios where nombre = '".$_POST['nombre']."'";
            $sql = mysqli_query($con, $sql);
            if(mysqli_num_rows($sql)!= 0)
            {
                echo "<script>alert('Error: el usuario ya existe en la BD.');</script>";
            }
                else
                {
                    //inserto el usuario nuevo
                    $sql = "INSERT INTO usuarios (nombre, clave) values ('".$_POST['nombre']."', '".password_hash($_POST['clave'], PASSWORD_DEFAULT)."')";
                    $sql = mysqli_query($con, $sql);
                    if(mysqli_error($con))
                    {
                        echo "<script>alert('Error no se pudo insertar el registro');</script>";
                    }
                        else
                        {
                            echo "<script>alert('Registro insertado con éxito');</script>";
                        }     
                }
            //limpio el POST    
            echo "<script>window.location='index.php?modulo=procesar_registro';</script>";    
        }   
    ?>
</body>
</html>