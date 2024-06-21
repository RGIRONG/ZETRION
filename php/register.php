<?php
include '/var/www/html/php/users
.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);

    try {
        $query->execute();
        echo "User registered successfully. <a href='login.html'>Login here</a>";
    } catch (Exception $e) {
        if ($e->getCode() === '23000') { // Integrity constraint violation: 19 UNIQUE constraint failed
            echo "Username already taken. Please choose a different one.";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
