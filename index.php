<?php

?>
<!DOCTYPE html>
<html lang="es-MX">

<head>

    <title>ZETRION</title>
    <meta charset="UTF-8">
    <meta name="description" content="ZETRION | Busqueda de Libros ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to=fit=no">
    <meta name="author" content="Ruben Giron" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="zetrion.css">

    <!---<link rel="icon" href="img/core-img/favicon.ico"> --->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">

</head>

<body>

    <!-- Inicio Precarga-->

    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>

    <!-- Fin Precarga -->

    <!--Inicio De Barra De Navegacion-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">

                        <!-- Inicio Logo -->

                        <a class="navbar-brand" href="index.php">
                            <img class="navlogo" src="img/logo/logo.png" alt="ZETRION" width="175">
                        </a>

                        <!-- Fin Logo -->

                        <!-- Inicio Barra Estatica-->

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
                            aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>

                        <!-- Fin Barra Estatica -->

                        <!--Enlaces-->

                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link " href="index.php"> Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="search.php">Buscar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Novedades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Guia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Equipo</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">...</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">¿Que es Zetrion?</a>
                                        <a class="dropdown-item" href="#">Desarollo</a>
                                        <a class="dropdown-item" href="#">Mision y Vision</a>
                                        <a class="dropdown-item" href="#">Nuestro Compromiso</a>
                                        <a class="dropdown-item" href="#">Contacto</a>
                                        <a class="dropdown-item" href="https://cbtis133.edu.mx/index.php">CBTiS 133</a>
                                    </div>
                            </ul>

                            <!--Inicio de Buscar-->

                            <div id="search-wrapper">
                                <form method="post" action="foundit.php" autocomplete="off"
                                    onsubmit="return validarFormulario();">
                                    <input type="text" name="busquedaphp" id="search" placeholder="Buscar...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="Buscar">
                                </form>
                            </div>

                            <script>
                            function validarFormulario() {
                                var x = document.forms[0]["busquedaphp"].value;
                                if (x == "") {
                                    alert("Debes ingresar texto para buscar");
                                    return false;
                                }
                            }
                            </script>
                            <!-- Fin de Buscar -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--Fin De Barra De Navegacion-->

    <!--Inicio De Carrucel...-->
    <div class="hero-area">

        <!--Inicio De Imagenes Dezlizantes T... -->
        <div class="hero-slides owl-carousel">
            <!--Imagen 1-->
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url(img/blog-img/bg1.jpg);"></div>
            <!--Imagen 2-->
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url(img/blog-img/bg2.jpg);"></div>
            <!--Imagen 2-->
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url(img/blog-img/bg3.jpg);"></div>
            <!--Imagen 2-->
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url(img/blog-img/bg4.jpg);"></div>
        </div>
        <div class="hero-post-area">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!--Post 1 -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p class="p-whitesimple">1</p>
                                </div>
                                <div class="post-title">
                                    <a href="#">Seguridad Industrial</a>
                                </div>
                            </div>
                            <!--Post 2 -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p class="p-whitesimple">2</p>
                                </div>
                                <div class="post-title">
                                    <a href="#">Eficiencia Mejorada</a>
                                </div>
                            </div>
                            <!--Post 3 -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p class="p-whitesimple">3</p>
                                </div>
                                <div class="post-title">
                                    <a href="#">Calidad De Producto</a>
                                </div>
                            </div>
                            <!--Post 4-->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p class="p-whitesimple">4</p>
                                </div>
                                <div class="post-title">
                                    <a href="#">Cumplimiento Normativo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin De Post Deslizante-->
    </div>
    <!--Fin De Carrucel...-->

    <!-- Inico Del Cuerpo-->
    <div class="main-content-wrapper section-padding-100">
        <!-- Inicio Contenedor Central -->
        <div class="container">
            <!-- Inicio Contenedor Tablas -->
            <div class="row justify-content-center">
                <!--Inicio De Categorias-->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">ZETRION</li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1"
                                        role="tab" aria-controls="world-tab-1" aria-selected="true">¿ Que es
                                        ?</a>
                                </li>

                                <li class="ablack nav-item">
                                    <a class=" nav-link " id="tab2" data-toggle="tab" href="#world-tab-2" role="tab"
                                        aria-controls="world-tab-2" aria-selected="false">Problematica</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="tab3" data-toggle="tab" href="#world-tab-3" role="tab"
                                        aria-controls="world-tab-3" aria-selected="false">Objetivos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="tab4" data-toggle="tab" href="#world-tab-4" role="tab"
                                        aria-controls="world-tab-4" aria-selected="false">Soluciones</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent1">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel"
                                    aria-labelledby="tab1">

                                    <div class="row justify-content-lg-center text-justify">
                                        <!--Post Simple-->
                                        <div class="col-6 col-12">
                                            <div class="cardztn single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!--Imagen-->
                                                <div class="post-thumbnail cardztn-vid">
                                                    <div class="container mt-2">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <video id="videoPlayer" class="embed-responsive-item"
                                                                autoplay muted>
                                                                <source src="/img/vid/Mockup_01.mp4" type="video/mp4">
                                                            </video>
                                                        </div>
                                                    </div>
                                                    <!--Categoria-->
                                                    <div class="cardztn-tag"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>ZETRION</h5>
                                                    </a>
                                                    <p class="ptxt">En un mundo cada vez más conectado y
                                                        tecnológicamente avanzado, la innovación se ha convertido en el
                                                        motor de la transformación y el crecimiento. En este contexto,
                                                        nos complace presentar el proyecto
                                                        "Zetrion", una iniciativa ambiciosa que busca revolucionar y
                                                        mejorar la forma en que interactuamos con la tecnología y los
                                                        servicios en nuestra vida cotidiana. </p>
                                                    <p class="ptxt">En un entorno industrial donde la eficiencia y la
                                                        calidad son fundamentales, la gestión adecuada de los
                                                        subproductos es esencial para garantizar la productividad y la
                                                        seguridad. Nos complace presentar
                                                        un proyecto innovador que aborda un desafío específico en la
                                                        industria del aluminio: la recolección de rebabas resultantes
                                                        del proceso de corte de perfiles de aluminio.</p>
                                                    <p class="ptxt">El proyecto "Zetrion" representa una iniciativa
                                                        innovadora destinada a abordar la problemática crítica de la
                                                        generación y gestión de rebabas de aluminio en la industria del
                                                        aluminio. Esta problemática
                                                        ha sido identificada como una preocupación significativa debido
                                                        a sus efectos adversos en la eficiencia de producción, la
                                                        calidad del producto y la seguridad laboral. Zetrion propone una
                                                        solución
                                                        que se basa en la aplicación de la fuerza estática para atraer y
                                                        recolectar eficientemente las rebabas de aluminio, reduciendo
                                                        así los desperdicios y los riesgos asociados.</p>
                                                    <p class="ptxt">Este proyecto representa un paso hacia adelante en
                                                        la optimización de los procesos industriales relacionados con el
                                                        aluminio y tiene el potencial de contribuir significativamente a
                                                        la sostenibilidad
                                                        y la eficiencia en este sector. Estamos entusiasmados por
                                                        compartir esta iniciativa y esperamos que este documento sea un
                                                        punto de partida para futuras investigaciones y desarrollos en
                                                        la recolección
                                                        de rebabas de aluminio.</p>
                                                    <p class="ptxt"><strong>¡Bienvenidos a un futuro más limpio,
                                                            seguro y
                                                            eficiente en la industria del aluminio!</strong></p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Post Simple-->
                                        <div class="col-6 col-12">
                                            <div class="cardztn single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                                <!--Imagen-->
                                                <div class="cardztn-img">
                                                    <img src="img/png/dgti.png" class="cardztn-img card-img-top"
                                                        alt="Portada del libro">
                                                    <!--Categoria-->
                                                    <div class="cardztn-tag"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>DESARROLLO</h5>
                                                    </a>
                                                    <p class="ptxt">Este proyecto se encuentra en desarollo por alumnos
                                                        del
                                                        <a class="atxtlink" href="https://www.cbtis133.edu.mx/">CBTiS
                                                            No.
                                                            133 "Dr. Manuel Velasco Suarez"</a>.
                                                    </p>
                                                    <p class="ptxt"> Acompáñanos en este viaje hacia un futuro más
                                                        limpio y sostenible, donde ZETRION se convierte en sinónimo de
                                                        excelencia en la industria del aluminio. Juntos, estamos
                                                        cambiando el juego, un corte
                                                        a la vez.
                                                    </p>
                                                    <h5>CONSURSO NACIONAL DE PROTOTIPOS Y PROYECTOS DE EMPRENDIMIENTO
                                                    </h5>
                                                    <p class="ptxt"><em>La Dirección General de Educación
                                                            Tecnológica,
                                                            Industrial y de Servicios (DGETI) tiene como objetivo
                                                            formar
                                                            bachilleres técnicos que desarrollen, fortalezcan y
                                                            preserven la
                                                            cultura tecnológica, la infraestructura industrial y de
                                                            servicios, que coadyuven y satisfagan las necesidades
                                                            económicas
                                                            y sociales del país.</em></p>
                                                    <p class="ptxt"><em>El Concurso Nacional de Prototipos tiene su
                                                            antecedente en la Exposición de Prototipos creada en
                                                            1991,
                                                            iniciando con las categorías de prototipo tecnológico y
                                                            didáctico, donde migra a concurso en el año de 1999,
                                                            incorporando la categoría de Desarrollo de Software y/o
                                                            Multimedia. En el año 2002, el Concurso Nacional de
                                                            Prototipos
                                                            incorpora el Protocolo Internacional de Proyectos Expo
                                                            científicos (PIPE) impulsando la participación de los
                                                            alumnos de
                                                            la DGETI en concursos de ciencia y tecnología a nivel
                                                            internacional, integrando en el año 2010 la categoría de
                                                            Emprendedores, sólo para alumnos. El concurso busca
                                                            fomentar la
                                                            actividad científica y tecnológica, así como, generar un
                                                            espacio
                                                            de interés para la investigación, innovación y
                                                            divulgación de la
                                                            cultura científica desarrollada por alumnos y docentes
                                                            de la
                                                            DGETI, generando un promedio anual de 2,000 proyectos de
                                                            investigación a nivel nacional, enfocados a las áreas
                                                            temáticas
                                                            de innovación educativa, desarrollo tecnológico,
                                                            adolescencia y
                                                            salud, medio ambiente y cambio climático, así como
                                                            proyectos
                                                            emprendedores. A partir de 2018 se separa la modalidad
                                                            de
                                                            Emprendedores por la cantidad de proyectos presentados
                                                            para dar
                                                            paso al, I Encuentro Nacional de Emprendedores.</em></p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-12">
                                            <div class="cardztn single-blog-post wow fadeInUpBig" data-wow-delay="0.2s"
                                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="/img/vid/vidmin.jpg" class="cardztn-img card-img-top"
                                                        alt="">
                                                    <!--Categoria-->
                                                    <div class="cardztn-tag"><a href="#">ZETRION</a></div>
                                                    <!-- Video Button -->
                                                    <a href="https://youtu.be/pP9lKAghLuc" class="video-btn"><i
                                                            class="fa fa-play"></i></a>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>YouTube</h5>
                                                    </a>
                                                    <p>Presentacion</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">Proyecto</a> en <a href="#"
                                                                class="card-text">2024</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <div class="row">

                                        <div class="col-6 col-12">
                                            <!--Post Simple-->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/problem-ilust.png" alt="" width="300"
                                                        height="300">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>PROBLEMATICA</h5>
                                                    </a>
                                                    <p class="ptxt">La industria del aluminio es un pilar fundamental en
                                                        numerosos sectores económicos, desde la construcción hasta la
                                                        fabricación de productos de consumo. Sin embargo, a medida que
                                                        esta industria continúa
                                                        creciendo y evolucionando, también enfrenta desafíos
                                                        considerables, uno de los cuales se centra en la gestión de las
                                                        rebabas de aluminio, esas pequeñas virutas o filamentos de metal
                                                        que se generan
                                                        durante el proceso de corte de perfiles de aluminio con sierras
                                                        industriales.
                                                    </p>
                                                    <p class="ptxt">Las rebabas de aluminio son pequeñas virutas o
                                                        filamentos de metal que se desprenden durante el proceso de
                                                        corte de perfiles de aluminio. Este fenómeno es intrínseco a la
                                                        naturaleza del corte con
                                                        sierras industriales y se debe a la deformación plástica del
                                                        material. Las rebabas pueden variar en tamaño, forma y cantidad
                                                        dependiendo de varios factores, como la velocidad de corte, la
                                                        calidad
                                                        de la sierra y las propiedades del aluminio.</p>
                                                    <p class="ptxt">Esta problemática se deriva de varios factores: </p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/desperd-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Desperdicio de Material Valioso:</h5>
                                                    </a>
                                                    <p class="ptxt">Las rebabas de aluminio representan un desperdicio
                                                        de material valioso. En un momento en que la eficiencia y la
                                                        sostenibilidad son prioridades clave, la pérdida de aluminio en
                                                        forma de rebabas no
                                                        solo tiene un impacto económico, sino también ambiental.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/problemcalidprod-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Calidad del Producto:</h5>
                                                    </a>
                                                    <p class="ptxt">Las rebabas pueden adherirse a los productos
                                                        finales, afectando de forma negativa&nbsp; su calidad,&nbsp;
                                                        apariencia y valor. Esto puede resultar en rechazos de productos
                                                        y pérdidas adicionales para
                                                        las empresas.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/incunormat-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Riesgos para la Salud y Seguridad:</h5>
                                                    </a>
                                                    <p class="ptxt">Las rebabas de aluminio pueden representar un
                                                        peligro para la salud de los trabajadores. Pueden ingresar en
                                                        los ojos, la boca, la nariz o incluso quedar atrapadas debajo de
                                                        la ropa, lo que podría
                                                        dar lugar a lesiones dolorosas y potencialmente graves.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/problefic-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Problemas de Eficiencia:</h5>
                                                    </a>
                                                    <p class="ptxt">La presencia de rebabas en las máquinas de
                                                        producción puede llevar a detenciones no planificadas para su
                                                        eliminación, lo que afecta la eficiencia y la productividad de
                                                        las operaciones.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/problemcalidprod-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Cumplimiento Normativo:</h5>
                                                    </a>
                                                    <p class="ptxt">En muchos casos, existen regulaciones y estándares
                                                        medioambientales y de seguridad que las empresas deben cumplir,
                                                        que requieren una gestión adecuada de los residuos y la
                                                        protección de los trabajadores.
                                                        La gestión inadecuada de las rebabas puede llevar a
                                                        incumplimientos normativos y posibles sanciones.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <div class="row">

                                        <div class="col-6 col-12">
                                            <!--Post Simple-->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/objetivos-ilust.png" alt="" width="300"
                                                        height="300">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>OBJETIVOS&nbsp; &nbsp;</h5>
                                                    </a>
                                                    <p class="ptxt">Los objetivos de Zetrion abordan una serie de
                                                        desafíos y oportunidades en la industria del aluminio, desde la
                                                        reducción de desperdicio hasta la mejora de la seguridad y la
                                                        calidad del producto, y
                                                        la promoción de la sostenibilidad y el cumplimiento normativo.
                                                    </p>
                                                    <p class="ptxt">Los objetivos del proyecto "Zetrion", que se centra
                                                        en la recolección de rebabas de aluminio mediante fuerza
                                                        estática, son los siguientes:</p>
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/recic-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Reducción del Desperdicio de Aluminio:</h5>
                                                    </a>
                                                    <p class="ptxt">El objetivo principal es reducir significativamente
                                                        la cantidad de aluminio desperdiciado en forma de rebabas
                                                        durante el proceso de corte de perfiles de aluminio. Esto tiene
                                                        un impacto directo en
                                                        la eficiencia y los costos operativos de la producción.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/calidad-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Mejora de la Calidad del Producto:</h5>
                                                    </a>
                                                    <p class="ptxt">Norton es una empresa de seguridad informática que
                                                        ofrece software antivirus y de seguridad para PC, Mac y
                                                        dispositivos móviles. Sus productos incluyen protección contra
                                                        virus, ransomware, malware
                                                        y otras amenazas en línea, así como características adicionales
                                                        como VPN y control parental en algunos planes.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/safety-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Incremento de la Seguridad Laboral:</h5>
                                                    </a>
                                                    <p class="ptxt">Uno de los objetivos clave es reducir los riesgos
                                                        para la salud y la seguridad de los trabajadores al minimizar la
                                                        exposición a rebabas de aluminio, que pueden causar lesiones
                                                        oculares, cutáneas
                                                        y respiratorias.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/eficiency-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Aumento de la Eficiencia en la Producción:</h5>
                                                    </a>
                                                    <p class="ptxt">Al evitar detenciones no planificadas debido a la
                                                        acumulación de rebabas en las máquinas y equipos de producción,
                                                        se busca aumentar la eficiencia y la productividad en la
                                                        fabricación de perfiles
                                                        de aluminio.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/normas-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Sostenibilidad y Cumplimiento Normativo:</h5>
                                                    </a>
                                                    <p class="ptxt">El proyecto Zetrion también tiene como objetivo
                                                        contribuir a la sostenibilidad ambiental al reducir la cantidad
                                                        de aluminio desperdiciado, lo que puede ayudar a cumplir con
                                                        regulaciones medioambientales
                                                        y de seguridad en la industria.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/optimrecs-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ESTO ES UNA ETIQUETA</a>
                                                    </div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Optimización de Recursos:</h5>
                                                    </a>
                                                    <p class="ptxt">Se pretende optimizar el uso de recursos, incluyendo
                                                        la electricidad utilizada para generar la carga electrostática,
                                                        para lograr una recolección eficiente de rebabas de aluminio.
                                                    </p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/implement-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Implementación en la Industria:</h5>
                                                    </a>
                                                    <p class="ptxt">El proyecto aspira a ser una solución práctica y
                                                        efectiva para la industria del aluminio en general, por lo que
                                                        uno de los objetivos es lograr una implementación exitosa en
                                                        diversas empresas y procesos
                                                        de fabricación.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/develop-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Desarrollo Tecnológico:</h5>
                                                    </a>
                                                    <p class="ptxt">Además de los beneficios específicos para la
                                                        industria del aluminio, el proyecto también puede contribuir al
                                                        desarrollo y la aplicación de tecnologías relacionadas con la
                                                        captura de partículas y
                                                        materiales mediante fuerza electrostática en otros campos.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
                                    <div class="row">

                                        <div class="col-6 col-12">
                                            <!--Post Simple-->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/soluciones-ilust.png" alt="" width="300"
                                                        height="300">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>SOLUCIONES</h5>
                                                    </a>
                                                    <p class="ptxt">Para abordar estos desafíos, se han desarrollado
                                                        diversas soluciones de recolección de rebabas. Estas soluciones
                                                        pueden incluir sistemas de aspiración y filtración de aire para
                                                        capturar rebabas en
                                                        suspensión, dispositivos mecánicos para eliminar rebabas
                                                        adheridas a piezas y estrategias de diseño para minimizar la
                                                        generación de rebabas.
                                                    </p>
                                                    <h5>BENEFICIOS POTENCIALES DEL PROYECTO</h5>
                                                    <p class="ptxt">El proyecto de recolección de rebabas de aluminio
                                                        tiene como objetivo maximizar la eficiencia, la seguridad y la
                                                        sostenibilidad en la industria del aluminio. Al capturar y
                                                        gestionar eficazmente las
                                                        rebabas, se espera:</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/reduccost-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Reducción de Costos: </h5>
                                                    </a>
                                                    <p class="ptxt">Menos desperdicio de material y menos paradas no
                                                        planificadas pueden reducir los costos operativos.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/mejoracalidad-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Mejora de la Calidad del Producto:</h5>
                                                    </a>
                                                    <p class="ptxt">Menos rebabas en los productos finales pueden
                                                        mejorar su calidad y la satisfacción del cliente</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!--Post Simple-->
                                            <div class="single-blog-post">
                                                <!--Imagen-->
                                                <div class="post-thumbnail">
                                                    <img src="img/png/cumpnorm-ilust.png" alt="">
                                                    <!--Categoria-->
                                                    <div class="post-cta"><a href="#">ZETRION</a></div>
                                                </div>
                                                <!--Contedido-->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Cumplimiento Normativo: </h5>
                                                    </a>
                                                    <p class="ptxt">La implementación de soluciones de gestión de
                                                        rebabas puede ayudar a cumplir con las regulaciones
                                                        medioambientales y de seguridad.</p>
                                                    <!--Dato-->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                class="card-text">2023</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                        <!--Espacio-->
                        <div class="sidebar-widget-area">
                            <h5 class="title">¡Bienvenidos!</h5>
                            <div class="widget-content">
                                <div class="col-6 col-12">
                                    <div class="cardztn single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                        <!--Imagen-->
                                        <div class="post-thumbnail cardztn-vid">
                                            <a href="#" class="headline">

                                                <h3 class="title">Iniciar Sesion</h3>
                                            </a>
                                            <!--Contedido-->
                                            <div class="post-content">

                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Correo /
                                                            Matricula</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                        <div id="emailHelp" class="form-text"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1"
                                                            class="form-label">Contraseña</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </div>
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="exampleCheck1">
                                                        <label class="form-check-label"
                                                            for="exampleCheck1">Recordarme</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Iniciar</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container mt-5">
                                        <div class="row">
                                            <div class="col">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <video id="videoPlayer" class="embed-responsive-item" autoplay
                                                        muted>
                                                        <source src="/img/vid/Mockup_01.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-area">
                                <h5 class="title">Nosotros</h5>
                                <div class="widget-content">
                                    <p>La escuela de magia Hiccups vuelve a recibir a sus alumnos para un nuevo curso.
                                        No hay noticias del temible Bordemor, el innombrable, al que todos nombran sin
                                        parar. Todo sigue igual que el año anterior salvo por
                                        el anuncio de una rifa mágica del gremio de frittens de Frittonia para conseguir
                                        el collar de orejas de Kobold, lo que es recibido con júbilo por los alumnos.
                                    </p>
                                </div>
                            </div>
                            <!--Espacio-->


                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js">
                            </script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                            <script>
                            const videoPlayer = document.getElementById('videoPlayer');
                            const videos = [
                                '/img/vid/Mockup_01.mp4',
                                '/img/vid/Mockup_11.mp4',
                                '/img/vid/Mockup_13.mp4',
                                '/img/vid/Mockup_18.mp4',
                                '/img/vid/Mockup_05.mp4',
                                '/img/vid/Mockup_08.mp4',
                                '/img/vid/Mockup_10.mp4',
                            ];
                            let currentVideoIndex = 0;

                            videoPlayer.addEventListener('ended', () => {
                                currentVideoIndex = (currentVideoIndex + 1) % videos.length;
                                if (currentVideoIndex < videos.length) {
                                    videoPlayer.src = videos[currentVideoIndex];
                                    videoPlayer.play();
                                }
                            });

                            videoPlayer.addEventListener('play', () => {
                                if (videoPlayer.playbackRate === -1) {
                                    videoPlayer.playbackRate = 1;
                                }
                            });

                            videoPlayer.addEventListener('timeupdate', () => {
                                if (videoPlayer.currentTime === videoPlayer.duration) {
                                    videoPlayer.playbackRate = -1;
                                }
                            });
                            </script>
                            <div class="sidebar-widget-area">
                                <h5 class="title">Top Marcas</h5>
                                <div class="widget-content">
                                    <!--Post Simple-->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                        <!--Imagen-->
                                        <div class="post-thumbnail">
                                            <img src="img/logos/blackpcs.png" alt="">
                                        </div>
                                        <!--Contedido-->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5 class="mb-0">BLACKPCS</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Post Simple-->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                        <!--Imagen-->
                                        <div class="post-thumbnail">
                                            <img src="img/logos/benq.png" alt="">
                                        </div>
                                        <!--Contedido-->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5 class="mb-0">BENQ</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Post Simple-->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                        <!--Imagen-->
                                        <div class="post-thumbnail">
                                            <img src="img/logos/logitech.png" alt="">
                                        </div>
                                        <!--Contedido-->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5 class="mb-0">LOGITECH</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Post Simple-->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                        <!--Imagen-->
                                        <div class="post-thumbnail">
                                            <img src="img/logos/adata.png" alt="">
                                        </div>
                                        <!--Contedido-->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5 class="mb-0">ADATA</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Post Simple-->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                        <!--Imagen-->
                                        <div class="post-thumbnail">
                                            <img src="img/logos/hyperx.png" alt="">
                                        </div>
                                        <!--Contedido-->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5 class="mb-0">HYPERX</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Area De Redes-->
                            <div class="sidebar-widget-area">
                                <h5 class="title">Estamos En</h5>
                                <div class="widget-content">
                                    <div class="social-area d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-vimeo"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--Destacado-->
                            <div class="sidebar-widget-area">
                                <h5 class="title">Destacado</h5>
                                <div class="widget-content">
                                    <!--Post Simple-->
                                    <div class="single-blog-post todays-pick">
                                        <!--Imagen-->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/bg1.jpg" alt="">
                                        </div>
                                        <!--Contedido-->
                                        <div class="post-content px-0 pb-0">
                                            <a href="#" class="headline">
                                                <h5>Contenido Destacado</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Inicio Boton De Volver...-->

            <!--Fin Botton De Volver-->

            <!-- Fin de Contenmedor Central -->

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#top" class="btn btn-volver a-whitestatic">Volver</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Inicio De Pp...-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="footer-single-widget">
                            <a href="index.html"> <img src="img/logo/logo.png" alt="ZETRION" width="150"></a>
                            <div class="copywrite-text mt-30">
                                <p class="a-whitesimple">
                                    Copyright
                                    <script type="text/javascript">
                                    var year = new Date();
                                    document.write(year.getFullYear());
                                    </script>
                                    ZETRION. Todos Los Derechos Reservados
                                    <br> | Sitio Web Desarollado por
                                    <a href="http://zetrion.atwebpages.com/" target="_blank" rel="noopener noreferrer">
                                        <font style="color: dodgerblue;"> Rubén Girón </font>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="footer-single-widget">
                            <ul class="footer-menu d-flex justify-content-between ">
                                <li><a class="a-whitedinamic" href="#">Inicio</a></li>
                                <li><a class="a-whitedinamic" href="#">Novedades</a></li>
                                <li><a class="a-whitedinamic" href="#">Guia</a></li>
                                <li><a class="a-whitedinamic" href="#">Contacto</a></li>
                                <li><a class="a-whitedinamic" href="#">Acerca De</a></li>
                                <li><a class="a-whitedinamic" href="https://cbtis133.edu.mx/index.php">CBTiS 133</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="footer-single-widget">
                            <h5 class="aclasstt">Envia Tus Comentarios</h5>
                            <form class="aclasst" action="#" method="post" autocomplete="off">
                                <input class="a-whitesimple" type="email" name="email" id="email" placeholder="Correo">
                                <button class="a-whitesimple" type="button"><i class="fa fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Fin de Pp...-->

        <!-- jQuery -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>

</body>

</html>