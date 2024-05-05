<!DOCTYPE html>
<html lang="es-MX">

    <head>
    
        <title>ZETRION</title>
        <meta charset="UTF-8">
        <meta name="description" content="ZETRION | Busqueda de Libros ">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to=fit=no">
        <meta name="author" content="Ruben Giron"/>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="classt.css">
		
    	<!---<link rel="icon" href="img/core-img/favicon.ico"> --->
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
		<link rel="manifest" href="img/favicons/site.webmanifest">
		
    </head>

    <body>
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
                                
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            
							<!-- Fin Barra Estatica -->
							
                            <!--Enlaces-->
                                
                            <div class="collapse navbar-collapse" id="worldNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link a-navlink active" href="index.html"> Inicio</a>
                                    </li>
                                    <li class="nav-item" href="index.html">
										<a class="a-navlink nav-link" href="marcas.html">Buscar</a>
									</li>
                                    <li class="nav-item">
                                        <a class="a-navlink nav-link" href="news.html">Novedades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-navlink nav-link" href="contact.html">Guia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-navlink nav-link" href="about.html">Equipo</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="a-navlink nav-link dropdown-toggle" href="about.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">...</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="aboutus.html">¿Que es Zetrion?</a>
                                            <a class="dropdown-item" href="aboutwe.html">Desarollo</a>
                                            <a class="dropdown-item" href="thecompany.html">Mision y Vision</a>
                                            <a class="dropdown-item" href="commitment.html">Nuestro Compromiso</a>
                                            <a class="dropdown-item" href="missionandvision.html">Contacto</a>
                                            <a class="dropdown-item" href="#">CBTiS 133</a>
                                        </div>
                                    </li>
                                </ul>
                                
                                <!--Inicio de Buscar-->
                                
                                <div id="search-wrapper">
									<form method="post" action="foundit.php" autocomplete="off" onsubmit="return validarFormulario();">
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


								<!-- Fin de Buscar -->
								
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
		<div class="main-content-wrapper section-padding-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-8">
						<div class="post-content-area mb-50">
							<div class="world-catagory-area mt-50">
                            	<ul class="nav nav-tabs" id="myTab1" role="tablist">
                                	<li class="title">ZETRION</li>
                            	</ul>
                            	<div class="tab-content" id="myTabContent1">
                                	<div class="tab-pane fade show active" id="world-tab-1"role="tabpanel" aria-labelledby="tab1">
                                    	<div class="row">
											<?php
											// Ruta absoluta al archivo de base de datos de Access
											$databaseFile = "D:/XAMPP/htdocs/dashboard/librarycb133.accdb";

											// Término de búsqueda
											$busquedaphp = $_POST['busquedaphp']; // Recupera el término de búsqueda desde un formulario

											// Conexión a la base de datos Access
											$conn = odbc_connect("Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$databaseFile", '', '');

											if (!$conn) {
												die("Error de conexión a la base de datos: " . odbc_errormsg());
											}

											// Escapa y formatea el término de búsqueda
											$busquedaphp = "%" . str_replace("'", "''", $busquedaphp) . "%";

											// Definir las columnas en las que deseas buscar
											$columnas = array('TITULO', 'AUTOR', 'ETIQUETAS', 'COMENTARIOS');

											foreach ($columnas as $columna) {
												// Consulta SQL para buscar en la columna actual
												$query = "SELECT * FROM books WHERE $columna LIKE '$busquedaphp'";

												// Ejecutar la consulta
												$result = odbc_exec($conn, $query);

												if (!$result) {
													die("Error en la consulta de la columna $columna: " . odbc_errormsg());
												}

												while ($row = odbc_fetch_array($result)) {
													//  ARTICULO INICIO //
													echo "<div class='single-blog-post wow fadeInUpBig' data-wow-delay='0.2s'>"; //single blog
															echo "<div class='post-thumbnail'>";//thumbnail
																if (!empty($row['URL'])) {
																	echo "<img src='" . $row['URL'] . "' alt='Portada del libro' width='300' height='300'>";
																	}
													
																if (!empty($row['TITULO'])) {
																	echo "<div class='post-cta'><a href='#'>" . $row['TITULO'] . "</a></div>";
																}
															echo "</div>";//thumbnail
															
														// CONTENIDO //
														echo "<div class='post-content'>";//Post content
															if (!empty($row['TITULO'])) {
																	echo "<h1><a class='a-phptitle'>" . $row['TITULO'] . "</a></h1>";
																}
															
															
														
															echo "<h5>Encontrado por : $columna</h5>";

															echo "<p class='ptxt'>";
																// CONTENIDO DE RESULTADOS //
																foreach ($row as $col => $value) {
																				if ($col != 'Id' && $col != 'URL') {
																					echo "<div>";
																						echo "<ul class='list-group'>";
																						echo "<li class='list-group-item list-group-item-action list-group-item-primary'><strong>$col:</strong> $value</li></ul>";
																					echo "</div>";
																					}
																				}
															echo "</p>";
																echo "<p class='ptxt'><strong>¡Exelente!</strong></p>";
																//Dato//
																echo "<div class=post-meta>";
																	echo "<p><a href='#' class='card-link'>ZETRION</a> en <a href='#' class='card-text'>2023</a></p>";
																echo "</div>";
														echo "</div>";
													echo "</div>";
														echo "</div>";// Post content
													echo "</div>";//single blog
													
													}
												}

												// Cerrar la conexión
												odbc_close($conn);
												
											?>
										</div>	
									</div>		
								</div>				
							</div>					
						</div>
					</div>
				</div>
			</div>
		</div>
		
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