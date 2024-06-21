<?php
require 'php/conectdb.php';

if (isset($_POST['busquedaphp']) && $_POST['busquedaphp'] !== '') {
    $busqueda = $_POST['busquedaphp'];
    
    $trozos = explode(" ", $busqueda);
    $numero = count($trozos);
    
    if ($numero >= 1) {
        $stmt = $conn->prepare('SELECT * FROM books WHERE TITULO LIKE :busqueda LIMIT 50');
        $searchQuery = '%' . $busqueda . '%';
        $stmt->bindValue(':busqueda', $searchQuery, PDO::PARAM_STR);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
        }
    }
}
?>