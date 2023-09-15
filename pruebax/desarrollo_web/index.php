<?php
    session_start();
//para que el la pagina tenga un inicio de session y no puedan entrar sin iniciar sesion anteriormente
    if(!isset($_session['usuario'])){
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
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://www.flaticon.es/icon-font-gratis/hogar_3917033?related_id=3917033"> -->
    <title>Agenda Academica</title>
</head>
<body>
    <header id="page-header">
        <div class="logo">
            <a href="#">Logo</a> 
        </div>
        <nav class="menu" >
            <a href="index.html">Inicio</a>
            <a href="cerrar.php">cerrar session</a>
            <a href="login.php">Cuenta </a>
            <a href="#">Contacto</a>
            <a href="calendario.html">Calendario Evaluaciones</a>
            <a href="#">Horario </a>
            <a href="#">Promedio Ponderado </a>
        </nav>
    </header>
    <div class="inicio">
        <h2>Inicio</h2>
        <p>
           Lorem ipsum dolor sit amet consectetur, adipisicing elit.
           Rerum corrupti molestias earum sed.
           A veritatis labore dolor quam asperiores fuga!
           Incidunt numquam error commodi vel aliquam deleniti cum eligendi hic! 
        </p>
        <br>
        <div class="btn-inicio">
            <a href="#" class="btn">saber mas</a>
            <a href="#" class="btn">saber mas</a>     
        </div>
    </div>
    
    <section class="proyecto">
        <h2>Agenda academica</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Veniam vero, soluta numquam repudiandae ratione accusamus rerum pariatur ut eum.
            Delectus tenetur sunt, nam nostrum atque perferendis dolorum hic qui obcaecati!
        </p>
        <div class="texto_proyecto">
            <div>
                <!-- <i></i> -->
                <h3>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Officiis ad officia, ab hic architecto nihil beatae consectetur natus
                </h3>
                <!-- <p>parrafo</p> -->
            </div>
            <div>
                <!-- <i></i> -->
                <h3>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Officiis ad officia, ab hic architecto nihil beatae consectetur natus
                </h3>
                <!-- <p>parrafo</p> -->
            </div>
            <div>
                <!-- <i></i> -->
                <h3>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Officiis ad officia, ab hic architecto nihil beatae consectetur natus
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
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis accusamus commodi sequi,
            nostrum ratione, sit exercitationem harum vero dolore in odio iste voluptatem adipisci quis
            doloribus enim minima quibusdam sunt?
        </p>
        <a href="#" class="btn">saber mas </a>
    </section>
    <br>
    <hr>
    <br>
    <section class="agenda">
        <article>
            <h2>Agenda</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Aliquam reprehenderit temporibus deserunt, est cupiditate quae molestias.
                Earum corporis optio blanditiis necessitatibus autem voluptatum consequuntur
                magnam fuga odio quidem, nemo maxime.
            </p>
            <a href="#" class="btn">Contacto</a>
        </article>
    </section>
    <br>
    <hr>
    <br>
    <section class="contacto">
        <h2>Contacto</h2>
        <p>informacion aqui</p>
        <br>
        <figure>
            <img src="imagen1.jpg" height="220" width="600" alt="Imagen">
        </figure>
    </section>
    <br>
    <script src="index.js"></script>
    
    <div class="footer--logo">
        <img src="https://www.uct.cl/content/uploads/logo64web.png" alt="" class="w-100">
    </div>
    <p class="Descripción footer text-center text-md-left"></p>
    <p>#SomosUCT</p>
    <p></p>
    <div class="col-md-3 mt-5 mt-md-0">
                <h4 class="title mb-4 text-center text-md-left">Contáctanos</h4>
                <div class="footer--contact">
                    <div class="footer--contact__icon">
                        <span class="material-icons">location_on</span>
                    </div>
                    <div class="footer--contact__text">
                        Manuel Montt 56, Temuco Campus San Francisco
                    </div>
                </div>
                <div class="footer--contact">
                    <div class="footer--contact__icon">
                        <span class="material-icons">
                            call
                        </span>
                    </div>
                    <div class="footer--contact__text">
                        <a href="tel:+56 452 205 555">+56 452 205 555</a>
                    </div>
                </div>
                <div class="footer--contact">
                    <div class="footer--contact__icon">
                        <span class="material-icons">
                            email
                        </span>
                    </div>
                    <div class="footer--contact__text">
                        <a href="mailto:info@uct.cl">info@uct.cl</a>
                    </div>
                </div>
            </div>
        <div class="contactanos">
            
        </div>
            <div>
                <!-- <i></i> -->
                <h3>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Officiis ad officia, ab hic architecto nihil beatae consectetur natus
                </h3>
                <!-- <p>parrafo</p> -->
            </div>
            <div>
                <!-- <i></i> -->
                <h3>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Officiis ad officia, ab hic architecto nihil beatae consectetur natus
                </h3>
                <!-- <p>parrafo</p> -->
            </div>
        </div>
    
</body>
</html>