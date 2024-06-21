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
                                    <a class="nav-link a-navlink" href="index.html"> Inicio</a>
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
                                    <a class="a-navlink nav-link dropdown-toggle" href="about.html" id="navbarDropdown"
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
                                    alert("Debe ingresar texto para buscar");
                                    return false;
                                }
                            }
                            </script>

                            <script>
                            // Creacion De Instancia
                            const SQL = window.SQL; //Acceso a Biblioteca SQLITE
                            const db = new SQL.Database();
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
    <div class="main-content-wrapper section-padding-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-16">
                    <div class="post-content-area mb-100">
                        <div class="world-catagory-area mt-100">
                            <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                <li class="title">ZETRION</li>
                            </ul>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel"
                                    aria-labelledby="tab1">
                                    <div class="container text-center">
                                        <div class="row d-flex flex-wrap">
                                            <?php
                                                require "php/conectdb.php";
                                                require "php/search.php";
                                                // POST //
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                    // Variable busquedaphp //
                                                    $busquedaphp = $_POST['busquedaphp']; // Grabacion de variable
                                                    // Conexión Con DB
                                                    try {
                                                        $conn = new PDO('sqlite:' . $databaseFile);
                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    } catch (PDOException $e) {
                                                        die("Error de conexión a la base de datos: " . $e->getMessage());
                                                    }
                                                    $busquedaphp = "%" . str_replace("'", "''", $busquedaphp) . "%";
                                                    // Busqueda x Columnas
                                                    $columnas = array('TITULO', 'AUTOR', 'ETIQUETAS', 'COMENTARIOS');
                                                    $coincidencias = false;
                                                    $resultados = array();  // Almacena los resultados aquí
                                                    foreach ($columnas as $columna) {
                                                        $query = "SELECT * FROM books WHERE $columna LIKE :busquedaphp";
                                                        try {
                                                            $stmt = $conn->prepare($query);
                                                            $stmt->bindParam(':busquedaphp', $busquedaphp, PDO::PARAM_STR);
                                                            $stmt->execute();
                                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                // Convertir el array a una cadena para poder comparar
                                                                $cadena_resultado = implode(",", $row);
                                                                $Id = $row['Id'];
                                                                // Verificar si el resultado ya existe en el array de resultados
                                                                if (!in_array($cadena_resultado, $resultados)) {
                                                                    // Si no existe, añadirlo al array y mostrarlo
                                                                    $resultados[] = $cadena_resultado;
                                                                    // Aquí es donde debes establecer $coincidencias en true
                                                                    $coincidencias = true;
                                            ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                                                <div class="cardztn single-blog-post wow fadeInUpBig"
                                                    data-wow-delay="0.2s">
                                                    <?php if (!empty($row['URL'])) : ?>
                                                    <div class="post-thumbnail">
                                                        <img src="<?= htmlspecialchars($row['URL']) ?>"
                                                            class="cardztn-img card-img-top " alt="Portada del libro">
                                                        <div class="cardztn-tag"><a
                                                                href="lib.php?id=<?= $Id ?>"><?= htmlspecialchars($row['TITULO']) ?></a>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                    <div class="card-body">
                                                        <?php if (!empty($row['TITULO'])) : ?>
                                                        <h5 class="card-title">
                                                            <a
                                                                href="lib.php?id=<?= $Id ?>"><?= htmlspecialchars($row['TITULO']) ?></a>
                                                        </h5>
                                                        <?php endif; ?>
                                                        <h6>Encontrado por: <?= $columna ?></h6>
                                                        <?php
                                                            foreach ($row as $col => $value) {
                                                            if ($col != 'Id' && $col != 'URL') {
                                                        ?>
                                                        <div>
                                                            <ul class="list-group">
                                                                <a href="lib.php?id=<?= $Id ?>" class="btn">
                                                                    <li class="list-group-item list-group-item-action list-group-item-primary"
                                                                        style="white-space: normal;">
                                                                        <strong><?= $col ?>:</strong>
                                                                        <br><?= $value ?>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <?php
                                                                }
                                                            }
                                                        ?>
                                                        <p class="ptxt"><strong>¡Excelente!</strong></p>
                                                        <div class="post-meta">
                                                            <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                    class="card-text">2023</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                                }
                                                            }
                                                        } catch (PDOException $e) {
                                                            die("Error en la consulta de la columna $columna: " . $e->getMessage());
                                                        }
                                                    }
                                                    if (!$coincidencias) {
                                                        echo "<script type='text/javascript'>window.location.href = 'nofound.php';</script>";
                                                        exit;
                                                    }
                                                    unset($conn); // cerrar bdd
                                                } else {
                                                    // codigo si hay error en el POST
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                Copyright <script type="text/javascript">
                                var year = new Date();
                                document.write(year.getFullYear());
                                </script>
                                ZETRION. Todos Los Derechos Reservados
                                <br>
                                | Sitio Web Desarollado por <a href="http://zetrion.atwebpages.com/" target="_blank"
                                    rel="noopener noreferrer">
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
                        <form class="aclasstt" action="#" autocomplete="off" method="post">
                            <input class="a-whitesimple" type="email" name="email" id="email" placeholder="Correo">
                            <button class="a-whitesimple" type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Fin de Pp...-->
    <script src="load_sql_lib.js"></script>
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