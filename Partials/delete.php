
<?php

$connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'root', '');
    $connection -> exec("set names utf8");

    $query = $connection -> prepare("delete from celeb where id = ?");
    $query -> bindValue(1, $_GET["id"], PDO::PARAM_INT);
    $query -> execute();

    header("Location: ../index.php");
?>
