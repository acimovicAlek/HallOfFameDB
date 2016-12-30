
<?php      
    $celebs = simplexml_load_file('../XML/celebs.xml'); 
    foreach($celebs->celeb as $i)
    {
        if($i->id == $_GET["id"]) {
            $dom=dom_import_simplexml($i);
            $dom->parentNode->removeChild($dom);
        }
    }
    file_put_contents('../XML/celebs.xml', $celebs->asXML());
    $content = file_get_contents('../XML/celebs.xml');
    if(strlen($content) == 49)
    {
        file_put_contents('../XML/celebs.xml',"");
    }
    header("Location: ../index.php");   
?>