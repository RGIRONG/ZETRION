<?php
session_start();
include '/var/www/html/commit/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
    $stmt ->bindParam(':username', $username);
    $stmt ->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['userId'] = $user['Id'];
        $_SESSION['username'] = $user['username'];
        header('Location: index.html');
    } else {
        echo "Invalid username or password. <a href='login.html'>Try again</a>";
    }
}
?>
