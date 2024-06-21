<?php
session_start();
include '/var/www/html/commit/database.php'; // Archivo que contiene la conexión a la base de datos

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($_SESSION['userId'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$userId = $_SESSION['userId'];
$bookId = $data['bookId'];

$query = $db->prepare("INSERT INTO likes (userId, bookId) VALUES (:userId, :bookId)");
$query->bindParam(':userId', $userId);
$query->bindParam(':bookId', $bookId);

if ($query->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error adding like']);
}
?>
