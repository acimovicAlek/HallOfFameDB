<?php
    include 'Partials/header.php';
if(isset($_SESSION["admin"])){
    
    $celebs = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/HallOfFameDB/XML/celebs.xml'); 
    foreach($celebs->celeb as $i){
        if($i->id == $_GET["id"]){
            $edit = $i;
        }
    }
    if(!isset($edit)) echo("<script>alert('No celeb with that id!');
        window.location.href='/HallOfFameDB/index.php';
        </script>");
?>        
<div class = "container">
            <div class = "row">
                <div class = "heading">Edit celeb!</div>
            </div>
        <div class="contact_form">
            <form action="Partials/edit.php?id=<?php echo($edit->id); ?>" method = "post" onsubmit="return validateCeleb()" enctype="multipart/form-data">
            <div id="error_name" class = "hide">Name is not valid!</div>
            <input id="name_inp" value = "<?php echo($edit->name); ?>" type="text" placeholder="Enter Name" name="celebf_name" onfocusout="validateName('name_inp','error_name')" required>
                <div id="error_desc" class = "hide" >Description is not valid!</div>
                <textarea id="desc_inp" placeholder = "Enter info" name = "celebf_info"><?php echo($edit->description); ?></textarea>
            <button type="submit" >Edit</button>
            </form>
        </div>
        </div>
<?php
}else{
    echo("Access denied!"); 
}
    include 'Partials/footer.php';
?>