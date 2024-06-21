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
                                    <a class="nav-link " href="index.php"> Inicio</a>
                                </li>
                                <li class="nav-item active">
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
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
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
                <div class="align-items-center mb-30">
                    <h4>A-Z</h4>
                </div>
                <!--Inicio Barra ABC...--
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <a href="#3"><button type="button" class="btn btn-primary">3</button></a>
                            <a href="#A"><button type="button" class="btn btn-primary">A</button></a>
                            <a href="#B"><button type="button" class="btn btn-primary">B</button></a>
                            <a href="#C"><button type="button" class="btn btn-primary">C</button></a>
                            <a href="#D"><button type="button" class="btn btn-primary">D</button></a>
                            <a href="#E"><button type="button" class="btn btn-primary">E</button></a>
                            <a href="#F"><button type="button" class="btn btn-primary">F</button></a>
                            <a href="#G"><button type="button" class="btn btn-primary">G</button></a>
                            <a href="#H"><button type="button" class="btn btn-primary">H</button></a>
                            <a href="#I"><button type="button" class="btn btn-primary">I</button></a>
                            <a href="#L"><button type="button" class="btn btn-primary">J</button></a>
                            <a href="#K"><button type="button" class="btn btn-primary">K</button></a>
                            <a href="#L"><button type="button" class="btn btn-primary">L</button></a>
                            <a href="#M"><button type="button" class="btn btn-primary">M</button></a>
                            <a href="#N"><button type="button" class="btn btn-primary">N</button></a>
                            <a href="#O"><button type="button" class="btn btn-primary">O</button></a>
                            <a href="#P"><button type="button" class="btn btn-primary">P</button></a>
                            <a href="#Q"><button type="button" class="btn btn-primary">Q</button></a>
                            <a href="#R"><button type="button" class="btn btn-primary">R</button></a>
                            <a href="#S"><button type="button" class="btn btn-primary">S</button></a>
                            <a href="#T"><button type="button" class="btn btn-primary">T</button></a>
                            <a href="#U"><button type="button" class="btn btn-primary">U</button></a>
                            <a href="#V"><button type="button" class="btn btn-primary">V</button></a>
                            <a href="#W"><button type="button" class="btn btn-primary">W</button></a>
                            <a href="#X"><button type="button" class="btn btn-primary">X</button></a>
                            <a href="#Y"><button type="button" class="btn btn-primary">Y</button></a>
                            <a href="#Z"><button type="button" class="btn btn-primary">Z</button></a>
                        </div>
                    </div>
                    -->
                <form method="post" action="foundit.php">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="A"
                                    class="btn btn-primary">A</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="B"
                                    class="btn btn-primary">B</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="C"
                                    class="btn btn-primary">C</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="D"
                                    class="btn btn-primary">D</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="E"
                                    class="btn btn-primary">E</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="F"
                                    class="btn btn-primary">F</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="G"
                                    class="btn btn-primary">F</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="H"
                                    class="btn btn-primary">H</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="I"
                                    class="btn btn-primary">I</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="J"
                                    class="btn btn-primary">J</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="K"
                                    class="btn btn-primary">K</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="L"
                                    class="btn btn-primary">L</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="M"
                                    class="btn btn-primary">M</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="N"
                                    class="btn btn-primary">N</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="Ñ"
                                    class="btn btn-primary">Ñ</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="O"
                                    class="btn btn-primary">O</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="P"
                                    class="btn btn-primary">P</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="Q"
                                    class="btn btn-primary">Q</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="R"
                                    class="btn btn-primary">R</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="S"
                                    class="btn btn-primary">S</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="T"
                                    class="btn btn-primary">T</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="U"
                                    class="btn btn-primary">U</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="V"
                                    class="btn btn-primary">V</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="W"
                                    class="btn btn-primary">W</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="X"
                                    class="btn btn-primary">X</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="Y"
                                    class="btn btn-primary">Y</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <button type="submit" name="busquedaphp" value="Z"
                                    class="btn btn-primary">Z</button></a>
                        </li>
                    </ul>
                </form>
            </div>
            <!--Inico De Imagenes...-->
            <div class="main-content-wrapper section-padding-50">
                <div class="row justify-content-center">
                    <div class="align-items-center mb-30">
                        <h4>AUTORES</h4>
                    </div>
                    <?php
                        require_once "php/conectdb.php";
                        try {
                            // Conexión a la base de datos SQLite
                            $conn = new PDO("sqlite:$databaseFile");
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                            // Consulta para recuperar datos de la tabla "books" de forma segura
                            $query = "SELECT DISTINCT AUTOR FROM books";
                            
                            // Preparar y ejecutar la consulta
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            
                            // Obtener los autores únicos
                            $autores = $stmt->fetchAll(PDO::FETCH_COLUMN);
                                
                            // Mostrar los autores como botones HTML
                            foreach ($autores as $autor) {
                            
                            }
                        } catch(PDOException $e) {
                            echo "Error al conectar a la base de datos: " . $e->getMessage();
                        }                        
                    ?>
                    <form method="POST" action="foundit.php">
                        <div class="container text-center">
                            <div class="row row-cols-4">
                                <?php foreach ($autores as $autor) { ?>
                                <div class="col">
                                    <div class="btn-group">
                                        <button type="submit" name="busquedaphp" value="<?php echo $autor; ?>"
                                            class="btn btn-primary"
                                            style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 10px; --bs-btn-font-size: .75rem; margin: 5px;"><?php echo $autor; ?></button>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--Fin De Imagenes...-->
            <!--inicio De Letras...-->
            <div class="row justify-content-between">
                <div class="world-catagory-area mt-50">
                    <h4 id="3" class="title"><span class="badge badge-primary">3</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/3COM ">3com</a></li>
                    </ul>
                    <h4 id="A" class="title"><span class="badge badge-primary">A</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/ACER">Acer</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ACTECK">Acteck</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ADATA">Adata</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ALIENWARE">Alienware</a></li>
                        <li><a href=" https://ctonline.mx/Marca/AMD">Amd</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ANVIZ">Anviz</a></li>
                        <li><a href=" https://ctonline.mx/Marca/AOC">Aoc</a></li>
                        <li><a href=" https://ctonline.mx/Marca/APC">Apc</a></li>
                        <li><a href=" https://ctonline.mx/Marca/APPLE">Apple</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ARUBA">Aruba</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ASPEL">Aspel</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ASUS">Asus</a></li>
                    </ul>
                    <h4 id="B" class="title"><span class="badge badge-primary">B</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/BADGY">Badgy</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BALAM-RUSH">Balam Rush</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BATTERY-FIRST">Battery First</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BENQ">Benq</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BIND">Bind</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BITDEFENDER">Bitdefender</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BIXOLON">Bixolon</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BLACKBERRY">Blackberry</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BLACKPCS">Blackpcs</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BLECK">Bleck</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BROBOTIX">Brobotix</a></li>
                        <li><a href=" https://ctonline.mx/Marca/BROTHER">Brother</a></li>
                    </ul>
                    <h4 id="C" class="title"><span class="badge badge-primary">C</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/CANON ">Canon</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CDP ">Cdp</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CISCO ">Cisco</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CITIZEN ">Citizen</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CLIP ">Clip</a></li>
                        <li><a href=" https://ctonline.mx/Marca/COMPAQ ">Compaq</a></li>
                        <li><a href=" https://ctonline.mx/Marca/COMPLET ">Complet</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CONDUMEX ">Condumex</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CONDUNET ">Condunet</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CONTPAQI ">Contpaqi</a></li>
                        <li><a href=" https://ctonline.mx/Marca/COOLCAPITAL ">Coolcapital</a></li>
                        <li><a href=" https://ctonline.mx/Marca/COREL ">Corel</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CORSAIR ">Corsair</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CRUCIAL ">Crucial</a></li>
                        <li><a href=" https://ctonline.mx/Marca/CYBERPOWER ">Cyberpower</a></li>
                    </ul>
                    <h4 id="D" class="title"><span class="badge badge-primary">D</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/D-LINK ">D-link</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DAHUA-TECHNOLOGY ">Dahua Technology</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DATA-COMPONENTS ">Data Components</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DATALOGIC ">Datalogic</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DATAMAX ">Datamax</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DATAPAC ">Datapac</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DATASHIELD ">Datashield</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DELL ">Dell</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DELL-GAMING ">Dell Gaming</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DELLEMC ">Dellemc</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DESS ">Dess</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DIGIFORT ">Digifort</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DIGITAL-PERSONA ">Digital Persona</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DIVOOM ">Divoom</a></li>
                        <li><a href=" https://ctonline.mx/Marca/DURACELL ">Duracell</a></li>
                    </ul>
                    <h4 id="E" class="title"><span class="badge badge-primary">E</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/EASY-LINE ">Easy Line</a></li>
                        <li><a href=" https://ctonline.mx/Marca/EC-LINE ">Ec-line</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ECS ">Ecs</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ELOTOUCH ">Elotouch</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ENERGY-SISTEM ">Energy Sistem</a></li>
                        <li><a href=" https://ctonline.mx/Marca/EPCOM ">Epcom</a></li>
                        <li><a href=" https://ctonline.mx/Marca/EPSON ">Epson</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ESET ">Eset</a></li>
                        <li><a href=" https://ctonline.mx/Marca/EVOLIS ">Evolis</a></li>
                        <li><a href=" https://ctonline.mx/Marca/EVOROK ">Evorok</a></li>
                        <li><a href=" https://ctonline.mx/Marca/EVOTEC ">Evotec</a></li>
                        <li><a href=" https://ctonline.mx/Marca/EZVIZ ">Ezviz</a></li>
                    </ul>
                    <h4 id="F" class="title"><span class="badge badge-primary">F</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/FOLKSAFE ">Folksafe</a></li>
                        <li><a href=" https://ctonline.mx/Marca/FORZA ">Forza</a></li>
                        <li><a href=" https://ctonline.mx/Marca/FRONT ">Front</a></li>
                        <li><a href=" https://ctonline.mx/Marca/FUJITSU ">Fujitsu</a></li>
                    </ul>
                    <h4 id="G" class="title"><span class="badge badge-primary">G</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/GAME-FACTOR ">Game Factor</a></li>
                        <li><a href=" https://ctonline.mx/Marca/GENERICO ">Generico</a></li>
                        <li><a href=" https://ctonline.mx/Marca/GETTTECH ">Getttech</a></li>
                        <li><a href=" https://ctonline.mx/Marca/GIGABYTE ">Gigabyte</a></li>
                        <li><a href=" https://ctonline.mx/Marca/GINGA ">Ginga</a></li>
                        <li><a href=" https://ctonline.mx/Marca/GRANDSTREAM ">Grandstream</a></li>
                    </ul>
                    <h4 id="H" class="title"><span class="badge badge-primary">H</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/HEWLETT-PACKARD-ENTERPRISE ">Hewlett Packard
                                Enterprise</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HIKVISION ">Hikvision</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HIKVISION-DIGITAL-TECHNOLOGY ">Hikvision Digital
                                Technology</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HILOOK ">Hilook</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HISENSE ">Hisense</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HITACHI ">Hitachi</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HONEYWELL ">Honeywell</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HP ">Hp</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HUAWEI ">Huawei</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HYPERX ">Hyperx</a></li>
                        <li><a href=" https://ctonline.mx/Marca/HYUNDAI ">Hyundai</a></li>
                    </ul>
                    <h4 id="I" class="title"><span class="badge badge-primary">I</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/ICM ">Icm</a></li>
                        <li><a href=" https://ctonline.mx/Marca/INDIANA ">Indiana</a></li>
                        <li><a href=" https://ctonline.mx/Marca/INDUSTRIAS-SOLA-BASIC ">Industrias Sola Basic</a>
                        </li>
                        <li><a href=" https://ctonline.mx/Marca/INGRESSIO ">Ingressio</a></li>
                        <li><a href=" https://ctonline.mx/Marca/INTEL ">Intel</a></li>
                        <li><a href=" https://ctonline.mx/Marca/INTELLINET ">Intellinet</a></li>
                        <li><a href=" https://ctonline.mx/Marca/INTERMEC ">Intermec</a></li>
                        <li><a href=" https://ctonline.mx/Marca/IP-COM ">Ip-com</a></li>
                    </ul>
                    <h4 id="J" class="title"><span class="badge badge-primary">J</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/JABRA ">Jabra</a></li>
                        <li><a href=" https://ctonline.mx/Marca/JC-VISION ">Jc Vision</a></li>
                    </ul>
                    <h4 id="K" class="title"><span class="badge badge-primary">K</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/KASPERSKY ">Kaspersky</a></li>
                        <li><a href=" https://ctonline.mx/Marca/KIGO ">Kigo</a></li>
                        <li><a href=" https://ctonline.mx/Marca/KINGSTON-TECHNOLOGY ">Kingston Technology</a></li>
                        <li><a href=" https://ctonline.mx/Marca/KOBLENZ ">Koblenz</a></li>
                        <li><a href=" https://ctonline.mx/Marca/KODAK ">Kodak</a></li>
                        <li><a href=" https://ctonline.mx/Marca/KYOCERA ">Kyocera</a></li>
                    </ul>
                    <h4 id="L" class="title"><span class="badge badge-primary">L</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/LACES ">Laces</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LANIX ">Lanix</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LENOVO ">Lenovo</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LEVYDAL ">Levydal</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LEXMARK ">Lexmark</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LF-ACUSTICS ">Lf Acustics</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LG ">Lg</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LINKSYS ">Linksys</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LITE-ON ">Lite-on</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LOGICO ">Logico</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LOGITECH ">Logitech</a></li>
                        <li><a href=" https://ctonline.mx/Marca/LOGITECH-GAMING ">Logitech Gaming</a></li>
                    </ul>
                    <h4 id="M" class="title"><span class="badge badge-primary">M</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/MAKENA ">Makena</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MANHATTAN ">Manhattan</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MEGAPOWER ">Megapower</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MEMOREX ">Memorex</a></li>
                        <li><a href=" https://ctonline.mx/marcas/micrositio/mercusys ">Mercusys</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MERIVA-SECURITY ">Meriva Security</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MICROSOFT ">Microsoft</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MICTRACK ">Mictrack</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MIKROTIK ">Mikrotik</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MIMOSA-NETWORKS ">Mimosa Networks</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MMF ">Mmf</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MOBIFREE ">Mobifree</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MOTOROLA ">Motorola</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MSI ">Msi</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MULTIMEDIA-SCREENS ">Multimedia Screens</a></li>
                        <li><a href=" https://ctonline.mx/Marca/MYBUSINESS ">Mybusiness</a></li>
                    </ul>
                    <h4 id="N" class="title"><span class="badge badge-primary">N</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/NACEB-TECHNOLOGY ">Naceb Technology</a></li>
                        <li><a href=" https://ctonline.mx/Marca/NATIONALSOFT ">Nationalsoft</a></li>
                        <li><a href=" https://ctonline.mx/Marca/NEFFOS ">Neffos</a></li>
                        <li><a href=" https://ctonline.mx/Marca/NEWLAND ">Newland</a></li>
                        <li><a href=" https://ctonline.mx/Marca/NINTENDO ">Nintendo</a></li>
                        <li><a href=" https://ctonline.mx/Marca/NORTH-SYSTEM ">North System</a></li>
                        <li><a href=" https://ctonline.mx/Marca/NORTON ">Norton</a></li>
                    </ul>
                    <h4 id="O" class="title"><span class="badge badge-primary">O</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/OKIDATA ">Okidata</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ORVIBO ">Orvibo</a></li>
                        <li><a href=" https://ctonline.mx/Marca/OVALTECH ">Ovaltech</a></li>
                    </ul>
                    <h4 id="P" class="title"><span class="badge badge-primary">P</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/PACIFIC-SOFT ">Pacific Soft</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PANASONIC ">Panasonic</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PANDA ">Panda</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PANDUIT ">Panduit</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PCM ">Pcm</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PERFECT-CHOICE ">Perfect Choice</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PHILIPS ">Philips</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PLANET ">Planet</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PLANTRONICS ">Plantronics</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PNY ">Pny</a></li>
                        <li><a href=" https://ctonline.mx/Marca/POLAROID ">Polaroid</a></li>
                        <li><a href=" https://ctonline.mx/Marca/POLK-AUDIO ">Polk Audio</a></li>
                        <li><a href=" https://ctonline.mx/Marca/POLYCOM ">Polycom</a></li>
                        <li><a href=" https://ctonline.mx/Marca/POWER-CO ">Power Co</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PROLICOM ">Prolicom</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PROVISION-ISR ">Provision-isr</a></li>
                        <li><a href=" https://ctonline.mx/Marca/PYXIS ">Pyxis</a></li>
                    </ul>
                    <h4 id="Q" class="title"><span class="badge badge-primary">Q</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/QIAN ">Qian</a></li>
                    </ul>
                    <h4 id="R" class="title"><span class="badge badge-primary">R</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/RIZZO ">Rizzo</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ROKU ">Roku</a></li>
                    </ul>
                    <h4 id="S" class="title"><span class="badge badge-primary">S</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/SAMSUNG ">Samsung</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SANDISK ">Sandisk</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SANSUI ">Sansui</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SEAGATE ">Seagate</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SHARP ">Sharp</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SIEMON ">Siemon</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SILIMEX ">Silimex</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SMARTBITT ">Smartbitt</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SONY ">Sony</a></li>
                        <li><a href=" https://ctonline.mx/Marca/STAR-MICRONICS ">Star Micronics</a></li>
                        <li><a href=" https://ctonline.mx/Marca/STARTECH.COM ">Startech.com</a></li>
                        <li><a href=" https://ctonline.mx/Marca/STARTEL ">Startel</a></li>
                        <li><a href=" https://ctonline.mx/Marca/STYLOS ">Stylos</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SUPERIOR-ESSEX ">Superior Essex</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SWANN ">Swann</a></li>
                        <li><a href=" https://ctonline.mx/Marca/SYMANTEC ">Symantec</a></li>
                    </ul>
                    <h4 id="T" class="title"><span class="badge badge-primary">T</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/TARGUS ">Targus</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TDE ">Tde</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TECHZONE ">Techzone</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TENDA ">Tenda</a></li>
                        <li><a href=" https://ctonline.mx/Marca/THERMALTAKE ">Thermaltake</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TOPAZ ">Topaz</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TOSHIBA ">Toshiba</a></li>
                        <li><a href=" https://ctonline.mx/marcas/micrositio/tp-link ">Tp-link</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TRENDNET ">Trendnet</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TRIBE ">Tribe</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TRIPP-LITE ">Tripp-lite</a></li>
                        <li><a href=" https://ctonline.mx/Marca/TRUE-BASIX ">True Basix</a></li>
                    </ul>
                    <h4 id="U" class="title"><span class="badge badge-primary">U</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/UBIQUITI ">Ubiquiti</a></li>
                        <li><a href=" https://ctonline.mx/Marca/UNITECH ">Unitech</a></li>
                        <li><a href=" https://ctonline.mx/Marca/UP ">Up</a></li>
                    </ul>
                    <h4 id="V" class="title"><span class="badge badge-primary">V</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/VALTRONIC ">Valtronic</a></li>
                        <li><a href=" https://ctonline.mx/Marca/VELCRO ">Velcro</a></li>
                        <li><a href=" https://ctonline.mx/Marca/VERBATIM ">Verbatim</a></li>
                        <li><a href=" https://ctonline.mx/Marca/VICA ">Vica</a></li>
                        <li><a href=" https://ctonline.mx/Marca/VORAGO ">Vorago</a></li>
                    </ul>
                    <h4 id="W" class="title"><span class="badge badge-primary">W</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/WAM ">Wam</a></li>
                        <li><a href=" https://ctonline.mx/Marca/WESTERN-DIGITAL ">Western Digital</a></li>
                        <li><a href=" https://ctonline.mx/Marca/WESTINGHOUSE ">Westinghouse</a></li>
                    </ul>
                    <h4 id="X" class="title"><span class="badge badge-primary">X</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/XBOX ">Xbox</a></li>
                        <li><a href=" https://ctonline.mx/Marca/XEROX ">Xerox</a></li>
                        <li><a href=" https://ctonline.mx/Marca/XIAOMI ">Xiaomi</a></li>
                    </ul>
                    <h4 id="Y" class="title"><span class="badge badge-primary">Y</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/YEYIAN ">Yeyian</a></li>
                        <li><a href=" https://ctonline.mx/Marca/YONUSA ">Yonusa</a></li>
                        <li><a href=" https://ctonline.mx/Marca/YOUJIE ">Youjie</a></li>
                    </ul>
                    <h4 id="Z" class="title"><span class="badge badge-primary">Z</span></h4>
                    <ul>
                        <li><a href=" https://ctonline.mx/Marca/ZEBRA ">Zebra</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ZK-TECO ">Zk Teco</a></li>
                        <li><a href=" https://ctonline.mx/Marca/ZOWIE ">Zowie</a></li>
                    </ul>
                </div>
            </div>
            <!--Fin De Letras...-->
            <!--Inicio Boton De Volver...-->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#top" class="btn world-btn">Volver</a>
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