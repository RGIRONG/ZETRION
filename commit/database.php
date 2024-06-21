<?php
    try {
        // Ruta del archivo de la base de datos SQLite
        $databaseFile = "/var/www/html/commit/cb133.sqlite";
        
        // Establecer la conexión con la base de datos
        $conn = new PDO('sqlite:' . $databaseFile);
        
        // Configurar el manejo de errores para lanzar excepciones
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        // Manejar errores de conexión
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
    
    // DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
    if (isset($_POST['busquedaphp']) && $_POST['busquedaphp'] !== '') {
        $busqueda = $_POST['busquedaphp'];
        //CUENTA EL NUMERO DE PALABRAS
        $trozos = explode(" ", $busqueda);
        $numero = count($trozos);
        if ($numero == 1) {
            //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCCION CON LIKE
            $stmt = $conn->prepare('SELECT * FROM books WHERE TITULO LIKE :busqueda LIMIT 50');
            $stmt->bindValue(':busqueda', '%' . $busqueda . '%', PDO::PARAM_STR);
            $stmt->execute();
        } elseif ($numero > 1) {
            //SI HAY UNA FRASE SE UTILIZA EL ALGORITMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
            //SQLite3 no tiene una función equivalente a MATCH AGAINST, por lo que este enfoque no es posible directamente en SQLite3.
            //En su lugar, se podría realizar una búsqueda manualmente en SQLite3.
            //Pero dado que SQLite3 no ofrece una funcionalidad nativa de búsqueda de texto completo como MySQL, la solución sería diferente.
            //Por ejemplo, podrías hacer una consulta utilizando LIKE para cada palabra en la frase y luego ordenar por relevancia.
            //Sin embargo, esta es una simplificación y podría no ser tan efectiva como el uso de MATCH AGAINST en MySQL.
            //Si necesitas una funcionalidad similar, podrías considerar utilizar una base de datos que admita funciones de búsqueda de texto completo.
            //Si estás interesado en una solución de búsqueda más avanzada, podríamos explorar otras opciones, como el uso de bibliotecas de búsqueda de texto completo en PHP o la integración de motores de búsqueda como Elasticsearch.
            //Pero para esta respuesta, voy a simplificar y mostrar un ejemplo de búsqueda básica utilizando LIKE.
            $stmt = $conn->prepare('SELECT * FROM books WHERE TITULO LIKE :busqueda LIMIT 50');
            $searchQuery = '%' . $busqueda . '%';
            $stmt->bindValue(':busqueda', $searchQuery, PDO::PARAM_STR);
            $stmt->execute();
        }
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Almacenar los valores de las columnas en variables individuales
            $Id = $row['Id'];
            $Titulo = $row['TITULO'];
            $Autor = $row['AUTOR'];
            $Etiquetas = $row['ETIQUETAS'];
            $Comentarios = $row['COMENTARIOS'];
            $URL = $row['URL'];
            
            // VARIABLES 
                //  ID:             $Id
                //  Título:         $Titulo
                //  Autor:          $Autor
                //  Etiquetas:      $Etiquetas
                //  Comentarios:    $Comentarios
                //  URL:            $URL
            
            // Mostrar o procesar los resultados según sea necesario
            // Por ejemplo, puedes imprimir los valores o almacenarlos en un arreglo para su procesamiento posterior.
        }
    }
    ?>
    