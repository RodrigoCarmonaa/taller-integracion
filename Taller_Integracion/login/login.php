<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Agenda Academica</title>
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3 class="div123">¿Aún no tienes una cuenta?</h3>
                    <a href="https://accounts.google.com/o/oauth2/v2/auth?response_type=code&amp;access_type=online&amp;client_id=974874271684-bk2ftt9bcfqk83kv03nocqdfkdqvkm6s.apps.googleusercontent.com
            &amp;redirect_uri=http%3A%2F%2Flocalhost%2Fapi%2Findex.php&amp;state&amp;scope=email%20profile&amp;approval_prompt=auto"  '" style=" background: #dd4b39; border-radius: 5px; color: white; display: block; font-weight: bold; padding: 20px; text-align: center; text-decoration: none; width: 200px;">Iniciar session con google</a>
                    <p class="div456">Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                   
                </div>
            </div>
s
            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login_usuario.php"  method="POST" class="formulario__login" id="formregi">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="registro_usuario.php" method="POST" class="formulario__register" id="formlogi">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" id="name" pattern="[A-Za-z\s]+" title="Solo letras y espacios permitidos" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Ingrese un correo electrónico válido" required>
                    <input type="text" placeholder="Usuario" name="usuario" id="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" id="password" required>
                    <button type="button" onclick="validarRegistro()">Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="login.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script>
        function validarRegistro() {
            var nombre = document.getElementById("name").value;
            var correo = document.getElementById("email").value;
            var usuario = document.getElementById("usuario").value;
            var contrasena = document.getElementById("password").value;

            if (nombre.trim() === "" || correo.trim() === "" || usuario.trim() === "" || contrasena.trim() === "") {
                alert("Por favor, completa todos los campos.");
            } else {
                // Si todos los campos están completos, envía el formulario
                document.getElementById("formlogi").submit();
            }
        }
    </script>
</body>
</html>