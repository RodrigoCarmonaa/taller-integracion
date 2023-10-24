<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>valoracion de la pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="comentario.css" /> 
</head>
<body>
    <header>
        <div class="logo">
            <a href="#">Logo</a> 
        </div>
        <nav class="menu" >
            <a href="index.php">Inicio</a>
            <a href="Asistencia.html">Asistencia</a>
            <a href="calendario.html">Calendario Evaluaciones</a>
            <a href="#">Horario </a>
            <a href="#">Promedio Ponderado </a>
            <a href="soporte.html">soporte </a>
            <a href="comentario.php">valoracion de la pagina </a>
            <a href="cerrar.php">Cerrar session</a>
        </nav>
    </header>

    <div id="contenedor" >

        <div id="formulario">
            <form action="enviarcomentario.php" class="form-comentario" method="post" id="formulario" enctype="multipart/form-data">
                <div class="container--flex">
                    <h3>Nombre</h3>
                    <input type="text" name="nombre" id="nombre" class="form_input" required>
                </div>
                <div class="container--flex">
                    <h3>comentario</h3>
                    <textarea name="comentario" id="comentario" placeholder="escribe aquí tu comentario"></textarea>
                    <br /><br />
                    <input type="submit" id="enviar" class="form_input" value="enviar comentario!" required>
                </div>
            
            </form>
        </div>


        <div id="comentario">
            <h1>Comentarios</h1>
            <?php

            $conexion = mysqli_connect('localhost', 'root', '', 'login_register_db');
            $resultado =mysqli_query($conexion,'SELECT* FROM comentarios');

            while($comentario=mysqli_fetch_object($resultado))
            {
                ?>
                <b> <?php echo ($comentario->nombre); ?></b> (<?php echo($comentario->fecha); ?> )comento:
                <br/>
                <?php echo($comentario->comentario); ?>
                <br/>


                <?php

            }


            ?>




        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script language="javascript">
        $("#enviar").click(function(){
            var nombre = $('#nombre').val();
            var comentario = $('#comentario').val();

            if (nombre == "") {
                alert('Debes escribir un nombre');
                return;
            }

            if (comentario == "") {
                alert('Debes escribir un comentario');
                return;
            }

            $('#formulario').submit();
        });
    </script>
</body>
</html>