<?php
try {
    // Ruta del archivo de la base de datos SQLite
    $databaseFile = "/var/www/html/dbs/cb133.db";
    
    // Establecer la conexión con la base de datos
    $conn = new PDO('sqlite:' . $databaseFile);
    
    // Configurar el manejo de errores para lanzar excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Manejar errores de conexión
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

?>