<?php
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml')) {
        $celebs = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml');
        $csv = fopen($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/CSV/celebs.csv', 'w');
        foreach ($celebs->celeb as $i) {
        fputcsv($csv, get_object_vars($i),',','"');
        }
        fclose($csv);
    }
    header('Content-Disposition: attachment; filename="' . $_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/CSV/celebs.csv";');
    readfile($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/CSV/celebs.csv'); 
?>
