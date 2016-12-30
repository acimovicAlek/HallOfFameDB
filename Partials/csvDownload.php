<?php
    if (file_exists('../XML/celebs.xml')) {
        $celebs = simplexml_load_file('../XML/celebs.xml');
        $csv = fopen('../CSV/celebs.csv', 'w');
        foreach ($celebs->celeb as $i) {
        fputcsv($csv, get_object_vars($i),',','"');
        }
        fclose($csv);
    }
    header('Content-Disposition: attachment; filename="' . '../CSV/celebs.csv";');
    readfile('../CSV/celebs.csv'); 
?>
