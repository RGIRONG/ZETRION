<?php
session_start();
include 'database.php';

if (!isset($_SESSION['userId'])) {
   header('Location: /commit/login.html');
    exit();
}

$query = $db->query("SELECT * FROM books");
$books = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SYSTEM</title>
</head>

<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <h1>Register</h1>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form>
    <h1>Books</h1>
    <h2>Welcome,
        <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></h2>
    <div id="book-list">
        <form method="post" action="index.php" autocomplete="off" onsubmit="return validarFormulario();">
            <input type="text" name="busquedaphp" id="search" placeholder="Buscar...">
            <div id="close-icon"></div>
            <input class="d-none" type="submit" value="Buscar">
        </form>
        <script>
                            function validarFormulario() {
                                var x = document.forms[0]["busquedaphp"].value;
                                if (x == "") {
                                    alert("Debe ingresar texto para buscar");
                                    return false;
                                }
                            }
                            </script>
                            <?php
                                                require "/var/www/html/commit/database.php";
                                                // POST //
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                    // Variable busquedaphp //
                                                    $busquedaphp = $_POST['busquedaphp']; // Grabacion de variable
                                                    // Conexión Con DB
                                                    try {
                                                        $conn = new PDO('sqlite:' . $databaseFile);
                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    } catch (PDOException $e) {
                                                        die("Error de conexión a la base de datos: " . $e->getMessage());
                                                    }
                                                    $busquedaphp = "%" . str_replace("'", "''", $busquedaphp) . "%";
                                                    // Busqueda x Columnas
                                                    $columnas = array('TITULO', 'AUTOR', 'ETIQUETAS', 'COMENTARIOS');
                                                    $coincidencias = false;
                                                    $resultados = array();  // Almacena los resultados aquí
                                                    foreach ($columnas as $columna) {
                                                        $query = "SELECT * FROM books WHERE $columna LIKE :busquedaphp";
                                                        try {
                                                            $stmt = $conn->prepare($query);
                                                            $stmt->bindParam(':busquedaphp', $busquedaphp, PDO::PARAM_STR);
                                                            $stmt->execute();
                                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                // Convertir el array a una cadena para poder comparar
                                                                $cadena_resultado = implode(",", $row);
                                                                $Id = $row['Id'];
                                                                // Verificar si el resultado ya existe en el array de resultados
                                                                if (!in_array($cadena_resultado, $resultados)) {
                                                                    // Si no existe, añadirlo al array y mostrarlo
                                                                    $resultados[] = $cadena_resultado;
                                                                    // Aquí es donde debes establecer $coincidencias en true
                                                                    $coincidencias = true;
                                            ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                                                <div class="cardztn single-blog-post wow fadeInUpBig"
                                                    data-wow-delay="0.2s">
                                                    <?php if (!empty($row['URL'])) : ?>
                                                    <div class="post-thumbnail">
                                                        <img src="<?= htmlspecialchars($row['URL']) ?>"
                                                            class="cardztn-img card-img-top " alt="Portada del libro">
                                                        <div class="cardztn-tag"><a
                                                                href="lib.php?id=<?= $Id ?>"><?= htmlspecialchars($row['TITULO']) ?></a>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                    <div class="card-body">
                                                        <?php if (!empty($row['TITULO'])) : ?>
                                                        <h5 class="card-title">
                                                            <a
                                                                href="lib.php?id=<?= $Id ?>"><?= htmlspecialchars($row['TITULO']) ?></a>
                                                        </h5>
                                                        <?php endif; ?>
                                                        <h6>Encontrado por: <?= $columna ?></h6>
                                                        <?php
                                                            foreach ($row as $col => $value) {
                                                            if ($col != 'Id' && $col != 'URL') {
                                                        ?>
                                                        <div>
                                                            <ul class="list-group">
                                                                <a href="lib.php?id=<?= $Id ?>" class="btn">
                                                                    <li class="list-group-item list-group-item-action list-group-item-primary"
                                                                        style="white-space: normal;">
                                                                        <strong><?= $col ?>:</strong>
                                                                        <br><?= $value ?>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <?php
                                                                }
                                                            }
                                                        ?>
                                                        <p class="ptxt"><strong>¡Excelente!</strong></p>
                                                        <div class="post-meta">
                                                            <p><a href="#" class="card-link">ZETRION</a> en <a href="#"
                                                                    class="card-text">2023</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                                }
                                                            }
                                                        } catch (PDOException $e) {
                                                            die("Error en la consulta de la columna $columna: " . $e->getMessage());
                                                        }
                                                    }
                                                    if (!$coincidencias) {
                                                        echo "<script type='text/javascript'>window.location.href = 'nofound.php';</script>";
                                                        exit;
                                                    }
                                                    unset($conn); // cerrar bdd
                                                } else {
                                                    // codigo si hay error en el POST
                                                }
                                            ?>
        <?php
        foreach ($books as $book) {
            $bookId = $book['Id'];
            
            // Obtener número de likes
            $likesQuery = $db->prepare("SELECT COUNT(*) as likeCount FROM likes WHERE bookId = :bookId");
            $likesQuery->bindParam(':bookId', $bookId);
            $likesQuery->execute();
            $likeCount = $likesQuery->fetch(PDO::FETCH_ASSOC)['likeCount'];
            
            // Obtener comentarios
            $commentsQuery = $db->prepare("SELECT comments.comment, users.username, comments.timestamp FROM comments JOIN users ON comments.userId = users.Id WHERE bookId = :bookId");
            $commentsQuery->bindParam(':bookId', $bookId);
            $commentsQuery->execute();
            $comments = $commentsQuery->fetchAll(PDO::FETCH_ASSOC);
            
            echo "<div class='book'>";
            echo "<h2>{$book['TITULO']}</h2>";
            echo "<p>Author: {$book['AUTOR']}</p>";
            echo "<p>Likes: $likeCount</p>";
            echo "<button onclick='likeBook($bookId)'>Like</button>";
            echo "<button onclick='addComment($bookId)'>Comment</button>";
            echo "<h3>Comments:</h3>";
            foreach ($comments as $comment) {
                echo "<p><strong>{$comment['username']}</strong>: {$comment['comment']} <em>({$comment['timestamp']})</em></p>";
            }
            echo "</div>";
        }
        ?>
    </div>
    <script>
    function likeBook(bookId) {
        fetch('like.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    bookId: bookId
                })
            }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Liked successfully');
                    // Actualizar el contador de likes
                } else {
                    alert('Error: ' + data.message);
                }
            });
    }

    function addComment(bookId) {
        const comment = prompt('Enter your comment:');
        if (comment) {
            fetch('comment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        bookId: bookId,
                        comment: comment
                    })
                }).then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Comment added successfully');
                        // Actualizar la lista de comentarios
                    } else {
                        alert('Error: ' + data.message);
                    }
                });
        }
    }
    </script>
</body>

</html>