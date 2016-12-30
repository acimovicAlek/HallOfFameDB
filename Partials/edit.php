<?php
    $celebs = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml'); 
    foreach($celebs->celeb as $i)
    {
        if($i->id == $_GET["id"]) {
            $i->name = $_POST["celebf_name"];
            $i->description = $_POST["celebf_info"];
        }
    }
    
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml', $celebs->asXML());
   header("Location: ../adminpanel.php");   
?>