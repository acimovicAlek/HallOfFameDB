<?php

$connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'korisnik', 'sifra');
  $connection -> exec("set names utf8");

  $check_query = $connection -> prepare("select * from celeb where id = ?");
  $check_query -> bindValue(1, $_GET["celeb_id"], PDO::PARAM_INT);
  $check = $check_query -> execute();

  if($check){
    $query = $connection -> prepare("insert into comment set name = ?, comment = ?, celeb_id = ?");
    $query -> bindValue(1, $_POST["comment_name"], PDO::PARAM_STR);
    $query -> bindValue(2, $_POST["comment_text"], PDO::PARAM_STR);
    $query -> bindValue(3, $_GET["celeb_id"], PDO::PARAM_INT);
    $query -> execute();
  }

  header("Location: ../celeb.php?id=".$_GET["celeb_id"]);
?>
