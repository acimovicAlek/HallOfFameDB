
<?php      
    $celebs = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml'); 
    foreach($celebs->celeb as $i)
    {
        if($i->id == $_GET["id"]) {
            $dom=dom_import_simplexml($i);
            $dom->parentNode->removeChild($dom);
        }
    }
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml', $celebs->asXML());
    $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml');
    if(strlen($content) == 49)
    {
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml',"");
    }
    header("Location: ../index.php");   
?>