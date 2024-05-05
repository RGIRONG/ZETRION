<?php
    // Conectar a la db SQLite
    $db = new SQLite3('D:/XAMPP/htdocs/dashboard/sqlite/librarycb133.db');

    // Obtener el id desde la URL
    $id = $_GET['id'];

    // Recuperar datos de la fila del id
    $stmt = $db->prepare('SELECT * FROM books WHERE Id = :id');
    $stmt->bindValue(':id', $id, SQLITE3_TEXT);

    $results = $stmt->execute();

    // Mostrar datos
    while ($row = $results->fetchArray()) {
        echo "<ul>";
        foreach ($row as $col => $value) {
            echo "<li>" . htmlspecialchars($col) . ": " . htmlspecialchars($value) . "</li>";
        }
        echo "</ul>";
    }
?>

