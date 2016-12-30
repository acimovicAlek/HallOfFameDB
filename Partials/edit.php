<?php
    $celebs = simplexml_load_file('../XML/celebs.xml'); 
    foreach($celebs->celeb as $i)
    {
        if($i->id == $_GET["id"]) {
            $i->name = htmlspecialchars($_POST["celebf_name"]);
            $i->description = htmlspecialchars($_POST["celebf_info"]);
        }
    }
    
    file_put_contents('../XML/celebs.xml', $celebs->asXML());
   header("Location: ../adminpanel.php");   
?>