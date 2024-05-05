<?php
//cadena de conexion
mysql_connect("mysql:host=localhost;dbname=bookscb133", "RubenG@root", "password");
// DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
if ($_GET['busqueda']<>''){
  //CUENTA EL NUMERO DE PALABRAS
  $trozos=explode(" ", $_GET['busqueda']);
  $numero=count($trozos);
  if ($numero==1) {
    //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
    $sql = $db->prepare('SELECT * FROM books WHERE Nombre LIKE :busqueda LIMIT 50');
    $sql->execute(array(':busqueda' => '%'.$_GET['busqueda'].'%'));
  } elseif ($numero>1) {
    //SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
    //busqueda de frases con mas de una palabra y un algoritmo especializado
    //Nota: Para usar MATCH AGAINST, MySQL requiere que tengas un índice FULLTEXT en los campos relevantes.
    $sql = $db->prepare('SELECT *, MATCH (Nombre) AGAINST (:busqueda) AS Score FROM books WHERE MATCH (Nombre) AGAINST (:busqueda) ORDER BY Score DESC LIMIT 50');
    $sql->execute(array(':busqueda' => $_GET['busqueda']));
  }

  while ($row = $sql->fetch()) {
    //Mostramos los titulos de los articulos o lo que deseemos...
    echo "<p>{$row['Nombre']}</p>";
  }
}
?>