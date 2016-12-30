<?php
    if(isset($_POST["celebf_name"]) && strlen(trim($_POST["celebf_name"])) != 0){
        global $celebs;
        $content = file_get_contents('../XML/celebs.xml');
        if(strlen($content) != 0){
            $celebs = simplexml_load_file('../XML/celebs.xml');
        }else{
            $celebs = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><celebs></celebs>');
            $c = $celebs->addChild("celeb");
            $c->addChild("id", "1");
            $c->addChild("name" , "FIRST");
            $c->addChild("description" , "FIRST Desc");
            $c->addChild("file" , "celeb.jpg");
            $file = fopen('../XML/celebs.xml',"w");
            fwrite($file, $celebs->asXML());
        }
        
        $content = file_get_contents('../XML/celebs.xml');
        
        echo $content;
        
        $count = 0;
        foreach($celebs as $i){
            if($i->id >$count) $count = $i->id;
        }
        $count = $count+1;
        
        
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["celeb_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["celeb_image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["celeb_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
           && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["celeb_image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["celeb_image"]["name"]). " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
        }
        
        $new = "><celeb><id>".($count+1)."</id><name>".htmlspecialchars($_POST['celebf_name'])."</name><description>".htmlspecialchars($_POST["celebf_info"])." </description><file>".basename($_FILES["celeb_image"]["name"])."</file></celeb></celebs>";
        $content = substr($content,0,strlen($content)-10).$new;
        
        file_put_contents('../XML/celebs.xml', $content);

        
        header("Location: ../index.php");
        
    }

header("Location: ../index.php");
?>