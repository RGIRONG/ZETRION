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
    <link rel="stylesheet" href="classtt.css">

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

                        <a class="navbar-brand" href="index.html">
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
                                <li class="nav-item">
                                    <a class="nav-link a-navlink active" href="index.html"> Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-navlink nav-link" href="#">Buscar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-navlink nav-link" href="#">Novedades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-navlink nav-link" href="#">Guia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-navlink nav-link" href="#">Equipo</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="a-navlink nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">...</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">¿Que es Zetrion?</a>
                                        <a class="dropdown-item" href="#">Desarollo</a>
                                        <a class="dropdown-item" href="#">Mision y Vision</a>
                                        <a class="dropdown-item" href="#">Nuestro Compromiso</a>
                                        <a class="dropdown-item" href="#">Contacto</a>
                                        <a class="dropdown-item" href="https://cbtis133.edu.mx/index.php">CBTiS 133</a>
                                    </div>
                                </li>
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
                style="background-image: url(img/blog-img/bg2.jpg);"></div>
            <!--Imagen 2-->
            <div class="single-hero-slide bg-img background-overlay"
                style="background-image: url(img/blog-img/bg1.jpg);"></div>
        </div>

        <!--Inicio De Post Deslizante -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!--Post 1 -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">No veo, No Siento</a>
                                </div>
                            </div>
                            <!--Post 2 -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Segunda Parte</a>
                                </div>
                            </div>
                            <!--Post 3 -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Post-Title</a>
                                </div>
                            </div>
                            <!--Post 4-->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Single-Blog</a>
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

    <div class="main-content-wrapper section-padding-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="align-items-center">
                    <h1>ZETRION</h1>
                </div>
                <?php
                    require "php/conectdb.php";

                    try {
                        // Obtener el valor del id desde la URL
                        $id = $_GET['id'];

                        // Consultar los datos de la fila que coincide con el id
                        $stmt = $conn->prepare('SELECT * FROM books WHERE Id = :id');
                        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                        $stmt->execute();

                        // Mostrar los datos
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            // Almacenar los valores de las columnas en variables individuales
                            $Id = $row['Id'];
                            $Titulo = $row['TITULO'];
                            $Autor = $row['AUTOR'];
                            $Etiquetas = $row['ETIQUETAS'];
                            $Comentarios = $row['COMENTARIOS'];
                            $URL = $row['URL'];
                        }       
                ?>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card mb-3" style="max-width: 1080px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= htmlspecialchars($URL) ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title"><?= htmlspecialchars($Titulo) ?></h2>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                
                            } catch(PDOException $e) {
                                // Manejar errores de consulta
                                echo "Error al ejecutar la consulta: " . $e->getMessage();
                            }
                        ?>
                    </div>
                    <!--Fin De Letras...-->
                    <!--Inicio Boton De Volver...-->
                    <div class="row">
                        <div class="col-12">
                            <div class="load-more-btn mt-50 text-center">
                                <a href="#top" class="btn btn-volver a-whitestatic">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin Botton De Volver-->
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