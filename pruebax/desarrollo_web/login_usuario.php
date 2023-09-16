<?php
    session_start();

//conexion a base de datos 
    include 'conexion_be.php';
    

    $correo = $_POST ['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);



    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo'  and contrasena='$contrasena'");


    if(mysqli_num_rows($validar_login) > 0 ){
        $_SESSION['usuario']= $correo;
        echo'
            <script>
                alert("haz iniciado correctamente  ");
                window.location ="index.php";
            </script>
        ';

       
        exit;

    }else{
        echo'
            <script>
                alert("usuario no existe, por favor verfique su datos ");
                window.location ="login.php";
            </script>
        ';
        exit;

    }



?>