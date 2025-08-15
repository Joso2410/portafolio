<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/aeedad00de.js" crossorigin="anonymous"></script>
    <title>Portafolio | José Caraballo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_media_queries.css">

</head>
<body>
    
<div id="nav_general">

    <div class="nav_general_2">

        <i id="nombre" class="fa-solid fa-book"></i>
        
        <div class="lista_nav">
            <div class="lista_nav_ob" id="Inicio">Inicio</div>
            <div class="lista_nav_ob" id="Acerca_de">Acerca de</div>
            <div class="lista_nav_ob" id="Servicios">Servicios</div>
            <div class="lista_nav_ob" id="Portafolio">Portafolio</div>
            <div class="lista_nav_ob" id="Contacto">Contacto</div> 
        </div>
        
        <nav class="navbar">
            <div class="menu-toggle" id="menu-toggle"><i class="fa-solid fa-bars"></i></div>
            <div class="nav-links" id="nav-links">
            <li id="Inicio2"><a>Inicio</a></li>
            <li id="Acerca_de2"><a>Acerca</a></li>
            <li id="Servicios2"><a>Servicios</a></li>
            <li id="Portafolio2"><a>Portafolio</a></li>
            <li id="Contacto2"><a>Contacto</a></li>
            </div>
        </nav>


    </div>

    <?php if (isset($_SESSION['mensaje_exito'])): ?>
        <div class="notificacion_contacto">
            <?php 
            echo $_SESSION['mensaje_exito'];
            unset($_SESSION['mensaje_exito']); // Limpiar para que no se repita
            ?>
        </div>
    <?php endif; ?>

</div>


<div class="home_general" id="Inicio_Destino">

    <div class="home_img"></div>
    <div style="display: flex;flex-direction: row;align-items: center;color: #00FFF0;font-weight: 600;font-size: 25px;"><div class="linea_horizontal"></div>Hola<div class="linea_horizontal"></div></div>
    <h2 style="font-size: 52px;"> Soy <strong style="color: #00FFF0;">José</strong></h2>
    <p>Desarrollador y creador de aplicaciones web y<br>landing page, diseñador grafico y Soporte técnico informático<br>Aquí tienes un poco más sobre mí.</p>
    <div class="home_redes">
        <a href="https://www.facebook.com/people/Jose-Caraballo/pfbid0MPogqPzkxiWb1bNEcEJT3uKrpJGq237r4QChQvkJmDzqdg8DTW2tBWNKjLzHejxdl/" class="home_redes_ti" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://github.com/Joso2410" class="home_redes_ti" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.instagram.com/josegrc24/" class="home_redes_ti" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>

</div>

<div class="About_general" id="Acerca_de_Destino">

    <h2 class="heading">Acerca de</h2>

    <div class="About_general_descripcion">
        <div class="About_general_descripcion_cuadro_1">
            <h3>Acerca de mí como</h3>
            <h2>Desarrollador, diseñador,<br>Soporte técnico.</h2>
            <a  href="./document/CV_Jose_Caraballo_ATS.docx" class="boton_estilo_1">Curriculum ATS<i class="fa-solid fa-cloud-arrow-down" style="margin-left:10px;"></i></a>
        </div>

        <div class="About_general_descripcion_cuadro_2">

            <p style="text-align: justify!important;">
            Soy desarrollador web Full Stack con más de tres años de experiencia en el diseño y desarrollo de sistemas web personalizados. Me formé de manera autodidacta y he trabajado en proyectos clave dentro del área de soporte, destacando en la creación de aplicaciones para gestión de inventario, control de activos, soporte de aplicaciones, ect.
            <br> <br>
            Domino tecnologías como HTML, CSS, JavaScript, PHP, bootstrap, MySQL y PhpMyAdmin, y me especializo en construir soluciones funcionales, organizadas y orientadas a mejorar procesos internos. 
            </p>

            <div class="iconos_codigo">
                <img src="./Icon/html.svg" alt="Descripción del icono" width="50px" class="iconos_code">
                <img src="./Icon/css.svg" alt="Descripción del icono" width="50px" class="iconos_code">
                <img src="./Icon/javascript.svg" alt="Descripción del icono" width="50px" class="iconos_code">
                <img src="./Icon/mysql (1).svg" alt="Descripción del icono" width="50px" height="50px" class="iconos_code">
                <img src="./Icon/bootstrap.svg" alt="Descripción del icono" width="50px" height="50px" class="iconos_code">
            </div>

            <p style="text-align: justify!important;">
            Además, tengo habilidades en diseño gráfico y soporte técnico en equipos de escritorio y portátiles, lo que me permite brindar un enfoque integral tanto a nivel de software como hardware.
            <br> <br>
            Actualmente, me mantengo en constante aprendizaje y evolución, enfocado en mejorar la planificación y eficiencia de mis proyectos, además de expandir mis conocimientos en nuevas tecnologías.        
            </p>
          
        </div>
    </div>
    

</div>


<div class="Services_general" id="Servicios_Destino">

    <h2 class="heading">Servicios</h2>

     <div class="Services_general_descripcion">
        <div class="descripcion_cuadro">
            <div class="circulo_icon"><i class="fa-solid fa-code"></i></div>
            <h3 style="text-align: center;">Desarrollador y creador de <br> aplicaciones web</h3>
            <p style="text-align: justify;text-align: justify;text-justify: inter-word;line-height: 1.6; /* Espaciado entre líneas */margin-bottom: 1em; /* Espacio entre párrafos */">Me especializo en el desarrollo de aplicaciones web, desde la estructura del backend hasta el diseño del frontend. Puedo crear sistemas funcionales, intuitivos y seguros que resuelven necesidades reales, ya sea para gestión de datos, automatización de procesos o experiencias interactivas en línea. Trabajo con tecnologías modernas y enfoco cada proyecto en ofrecer eficiencia y facilidad de uso.</p>
        </div>
        <div class="descripcion_cuadro">
            <div class="circulo_icon"><i class="fa-solid fa-palette"></i></div>
            <h3 style="text-align: center;">Diseñador grafico</h3>
            <p style="text-align: justify;text-align: justify;text-justify: inter-word;line-height: 1.6; /* Espaciado entre líneas */margin-bottom: 1em; /* Espacio entre párrafos */">Como diseñador gráfico, puedo crear piezas visuales atractivas y funcionales que transmiten mensajes de forma clara y efectiva. Desde logotipos, banners y contenido para redes sociales hasta interfaces web, aplico principios de diseño, color y composición para lograr resultados visualmente impactantes y alineados con la identidad de cada proyecto.</p>
        </div>
        <div class="descripcion_cuadro">
            <div class="circulo_icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
            <h3 style="text-align: center;">Soporte técnico informático</h3>
            <p style="text-align: justify;text-align: justify;text-justify: inter-word;line-height: 1.6; /* Espaciado entre líneas */margin-bottom: 1em; /* Espacio entre párrafos */">brindo asistencia rápida y eficaz para resolver problemas de hardware y software, optimizar el rendimiento de equipos y garantizar la continuidad operativa. Mi experiencia incluye diagnóstico de fallas, mantenimiento preventivo y correctivo, así como soporte a usuarios para asegurar un entorno tecnológico estable y funcional.</p>
        </div>
     </div>

</div>


<div class="Portfolio_general" id="Portafolio_Destino">

    <h2 class="heading">Portfolio</h2>

     <div class="Portfolio_general_descripcion">
            <div class="Portfolio_linea">
                <div id="abrirGaleria" class="Portfolio_cuadro" style="background-image: url('./Img/Ordenes_de_salida/1.png'); background-size: cover;background-position: center;background-repeat: no-repeat;"><i class="fa-solid fa-eye icono-ojo" style="margin-left:8px;"></i></div>
                <a href="http://" class="ver_proyecto">Sistema de Ordenes de Salida<i class="fa-solid fa-angles-right" style="margin-left:8px;"></i></a>
                <div class="Portfolio_cuadro" style="background-image: url(''); background-size: cover;background-position: center;background-repeat: no-repeat;"><i class="fa-solid fa-eye icono-ojo"></i></div>
                <a href="http://" class="ver_proyecto">Ver mas detalles<i class="fa-solid fa-angles-right" style="margin-left:8px;"></i></a>
            </div>
            <div class="Portfolio_linea">
                <div id="abrirGaleria2" class="Portfolio_cuadro" style="background-image: url('./Img/Pagina_corporativa/1.png'); background-size: cover;background-position: center;background-repeat: no-repeat;"><i class="fa-solid fa-eye icono-ojo"></i></div>
                <a href="http://" class="ver_proyecto">Web corporativa / Aplicaciones<i class="fa-solid fa-angles-right" style="margin-left:8px;"></i></a>
                <div class="Portfolio_cuadro"><i class="fa-solid fa-eye icono-ojo"></i></div>
                <a href="http://" class="ver_proyecto">Ver mas detalles<i class="fa-solid fa-angles-right" style="margin-left:8px;"></i></a>
            </div>
     </div>

</div>


<div class="Contact_general" id="Contacto_Destino">

    <h2 class="heading">Contacto</h2>
   
    <form  class="Contact_general_descripcion" action="./PhpMailer/enviar.php" method="POST">
        <input type="text" name="nombre" id="" class="input_portafolio_text" placeholder="Tu nombre" autocomplete="off" required >
        <input type="email" name="correo" id="" class="input_portafolio_text" placeholder="Dirección de correo electrónico..." autocomplete="off" required >
        <textarea name="mensaje" id="" cols="30" rows="10" class="input_portafolio_textarea" placeholder="Escribe mensaje aquí" autocomplete="off" required ></textarea>
        <button type="submit" class="boton_estilo_1">Enviar<i class="fa-solid fa-paper-plane" style="margin-left:10px;"></i></button>
    </form>

</div>

<div class="footer_general">

    <div class="home_redes">
        <a href="https://www.facebook.com/people/Jose-Caraballo/pfbid0MPogqPzkxiWb1bNEcEJT3uKrpJGq237r4QChQvkJmDzqdg8DTW2tBWNKjLzHejxdl/" class="home_redes_ti" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://github.com/Joso2410" class="home_redes_ti" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.instagram.com/josegrc24/" class="home_redes_ti" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>

    <p>Todos los Derechos Reservados / Desarrollado por José Caraballo  © 2026 / Políticas de Privacidad / Aviso Legal</p>

</div>


<div class="cursor"></div>


    <!-- barra de navegación efecto-->

    <script>
    window.addEventListener('scroll', function () {
        const nav = document.getElementById('nav_general');
        if (window.scrollY > 20) {
        nav.classList.add('scrolled');
        } else {
        nav.classList.remove('scrolled');
        }
    });
    </script>


    <script src="./js/cursor_custom.js"></script>

    <script src="./js/nav_destino.js"></script>

    <script src="./js/nav_hamburguesa.js"></script>

    <?php include './php/galeria_portafolio.php';?>



</body>
</html>
