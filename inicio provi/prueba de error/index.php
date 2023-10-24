<?php
    session_start();
//para que el la pagina tenga un inicio de session y no puedan entrar sin iniciar sesion anteriormente
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("por favor debes iniciar sesion ");
                window.location = "login.php";
            </script>


        
        ';

       // header("location: login.php");
        session_destroy();
        die ();


    }



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Agenda Academica</title>
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
            <a href="comentario.php">valoracion de la pagina </a>
            <a href="soporte.html">soporte </a>
            <a href="cerrar.php">Cerrar session</a>
        </nav>
    </header>
    <div class="inicio">
        <p>

        </p>
        <br>

    </div>
    <section class="proyecto">
        <h2>Agenda academica</h2>
        <p>
            Bienvenido a la agenda academica de la Universidad Catolica de Temuco, en esta pagina podras encontrar diversas herramientas que facilitaran tus estudios
            a lo largo de tu año academico. En el menu de opciones puedes utilizar la calculadora de Asistencia que te medira el porcentaje de asistencia que llevas en cada ramo
            , una calculadora de promedio que calculara el promedio ponderado de tus notas y lo mas util e importante...
        </p>
        <div class="texto_proyecto">
            <div>
                <!-- <i></i> -->
                <h3>
                    GENERADOR DE HORARIO <br> <br>
                    Este generador de horario academico te permitira ordenar tus ramos, salas, dias de clases y edificios segun lo que elegiste en la toma de ramos al principio del semestre 
                </h3>
                <!-- <p>parrafo</p> -->
            </div>
            <div>
                <!-- <i></i> -->
                <h3>
                    CALENDARIO DE EVALUACIONES <br> <br>
                    En el calendario de evaluaciones podras anotar que dias del mes tienes algun control, prueba, examen, proyecto o trabajo segun lo que vayas teniendo durante el semestre
                    y, se te enviara un recordatorio para que puedas estudiar con tiempo.
                </h3>
                <!-- <p>parrafo</p> -->
            </div>
        </div>
    </section >
    <hr>
    <br>
    <section class="nosotros">
        <h2>Nosotros</h2>
        <p>
            Nosotros somos un grupo de 5 integrantes que decidió crear esta pagina pensando en estudiantes que no sepan organizar su hambiente estudiantil y facilitarles 
            herramientas para su comodidad
        </p>
    </section>
    <br>
    <hr>
    <section class="contacto">
        <h2>Contacto</h2>
    </section>
    <footer>
        <div class="footer-column">
            <img src="https://www.uct.cl/content/uploads/logo64web.png" alt="Imagen" width="300" height="300">
        </div>
        <div class="footer-column">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="fas fa-map-marker"></div>
                    <p>Manuel Montt 56, Temuco Campus San Francisco</p>
                </div>
                <div class="contact-item">
                    <div class="fas fa-phone"></div>
                    <p>+56 452 205 555</p>
                </div>
                <div class="contact-item">
                    <div class="fas fa-envelope"></div>
                    <p>info@uct.cl</p>
                </div>
            </div>
        </div>
        <div class="footer-column1">
            <h4>JEFE/A DE CARRERA</h4> <br>
            <p>
                Marcos Lévano Huamaccto <br> <br>
                mlevano@uctemuco.cl <br> <br>
                Fono: 45 2205688</p>
        </div>
    </footer>
    
    
<script src="index.js"></script>

</body>
</html>