<?php
  $connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'root', '');
  $connection -> exec("set names utf8");

  $content = simplexml_load_file("../XML/celebs.xml");
  foreach ($content->celeb as $i) {
    $query = $connection->query("SELECT * FROM celeb WHERE name = '".$i->name."'");
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if(!$result){
      $connection->query("INSERT INTO celeb set name = '".$i->name."', description = '".$i->description."', file = '".$i->file."'");
    }
  }
  //header("Location: ../adminpanel.php");
 ?>
