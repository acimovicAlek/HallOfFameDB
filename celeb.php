<?php
    include 'Partials/header.php';
if(isset($_SESSION["admin"])){
    
    $celebs = simplexml_load_file('XML/celebs.xml'); 
    foreach($celebs->celeb as $i){
        if($i->id == $_GET["id"]){
            $edit = $i;
        }
    }
    if(!isset($edit)) echo("<script>alert('No celeb with that id!');
        window.location.href='index.php';
        </script>");
?>        
<div class = "container">
            <div class = "row">
                <div class = "heading"><?php echo($edit->name);?></div>
            </div>
            <div class = "mainCel">
                <img style="width:180px; height:180px; display:block; float:left;" alt="noImage" src='img/<?php echo($edit->file);?>'/>
                <p>
                    <?php echo($edit->description);?>
                <p>
            </div>
        </div>
<?php
}else{
    echo("Access denied!"); 
}
    include 'Partials/footer.php';
?>