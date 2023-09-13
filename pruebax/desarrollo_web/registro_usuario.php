<?php 
//conexion con basa de datos 
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo= $_POST['correo'];
    $usuario= $_POST['usuario'];
    $contrasena =$_POST['contrasena'];

//inserta los datos de cada variable creada en la de la base de datos  llamada usuario
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
    VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena' )";

//primero verefica la conexion luego la isertacion de datos mediante la variable $query
    $ejecutar = mysqli_query($conexion, $query);
//si se ejeuta existosamente nos derigida al index.html que seria la pagina principal
    if ($ejecutar){
        echo '
            <script>
                alert("usuario almacenado existosamente");
                window.location = "/login.php";
            </script>

        ';

//en caso de tener error al ingresar devuelve al login_Register
    }else{
        echo'
            <script>
            alert("intentalo de nuevo usuario no almacenado");
            window.location ="/login.php";
            </script>

        ';

    }
    //cerramos la conexion
    mysqli_close($conexion);

?>