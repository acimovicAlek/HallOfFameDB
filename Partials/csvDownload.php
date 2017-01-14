<?php
$connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'korisnik', 'sifra');
    $connection -> exec("set names utf8");
    if ($connection) {
        $query = $connection -> query("select * from celeb");
        $csv = fopen('../CSV/celebs.csv', 'w');
        foreach ($query as $i) {
        fputcsv($csv, $i);
        }
        fclose($csv);
    }
    header('Content-Disposition: attachment; filename="' . '../CSV/celebs.csv";');
    readfile('../CSV/celebs.csv');
?>
