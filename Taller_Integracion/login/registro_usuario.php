<?php 
//conexion con basa de datos 
    include ('conex.inc');

    $nombre_completo = $_POST['nombre_completo'];
    $correo= $_POST['correo'];
    $usuario= $_POST['usuario'];
    $contrasena =$_POST['contrasena'];
//encriptar la contraseña mediante el algortimo sha512
    $contrasena =hash('sha512', $contrasena);


//inserta los datos de cada variable creada en la de la base de datos  llamada usuario
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
    VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena' )";
//verficar que el correo no se repita
    $verficar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    if(mysqli_num_rows($verficar_correo) > 0 ){
        echo'
            <script>
                alert("este correo ya esta registrado , intenta con otro diferente");
                window.location = "login.php";
            </script>
        ';
//sale del script asi no se guarda en la base de dato en caso de que se repita
        exit();
    }

    //verficar que el usuario no se repita
    $verficar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    if(mysqli_num_rows($verficar_usuario) > 0 ){
        echo'
            <script>
                alert("este usuario  ya esta registrado , intenta con otro diferente");
                window.location = "login.php";
            </script>
        ';
//sale del script asi no se guarda en la base de dato en caso de que se repita
        exit();
    }























//primero verefica la conexion luego la isertacion de datos mediante la variable $query
    $ejecutar = mysqli_query($conexion, $query);
//si se ejeuta existosamente nos derigida al index.html que seria la pagina principal
    if ($ejecutar){
        echo '
            <script>
                alert("usuario almacenado existosamente");
                window.location = "login.php";
            </script>

        ';

//en caso de tener error al ingresar devuelve al login_Register
    }else{
        echo'
            <script>
            alert("intentalo de nuevo usuario no almacenado");
            window.location ="login.php";
            </script>

        ';

    }
    //cerramos la conexion
    mysqli_close($conexion);

?>