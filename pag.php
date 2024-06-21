<?php
$databaseFile = "D:/XAMPP/htdocs/dashboard/sqlite/librarycb133.db";
//$db = new SQLite3('librarycb133.db');

$nombre_tabla = $_GET['nombre_tabla']; // Obtiene el nombre de la tabla desde la URL
$columna1 = $_GET['columna1']; // Obtiene el nombre de la columna1 desde la URL
$columna2 = $_GET['columna2']; // Obtiene el nombre de la columna2 desde la URL

$result = $db->query("SELECT $columna1, $columna2 FROM $nombre_tabla WHERE id=1");

while ($row = $result->fetchArray()) {
    echo "$columna1: " . $row[$columna1] . "\n";
    echo "$columna2: " . $row[$columna2] . "\n";
}
?>