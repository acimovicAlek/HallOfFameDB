<?php
$connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'korisnik', 'sifra');
    $connection -> exec("set names utf8");

    $query = $connection->prepare("update celeb set name = ?, description = ?");
    $query -> bindValue(1, $_POST["celebf_name"], PDO::PARAM_STR);
    $query -> bindValue(2, $_POST["celebf_info"], PDO::PARAM_STR);
    $query -> execute();

   header("Location: ../adminpanel.php");
?>
