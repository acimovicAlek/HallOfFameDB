<?php
    include 'Partials/header.php';
if(isset($_SESSION["admin"])){
?>        
<div class = "container">
            <div class = "row">
                <div class = "heading">Add new celeb!</div>
            </div>
        <div class="contact_form">
            <form action="Partials/addCeleb.php" method = "post" onsubmit="return validateCeleb()" enctype="multipart/form-data">
            <div id="error_name" class = "hide">Name is not valid!</div>
            <input id="name_inp" type="text" placeholder="Enter Name" name="celebf_name" onfocusout="validateName('name_inp','error_name')" required>
                <input type="file" id="celeb_image" name="celeb_image">
                <div id="error_desc" class = "hide">Description is not valid!</div>
                <textarea id="desc_inp" placeholder = "Enter info" name = "celebf_info" ></textarea>
            <button type="submit" >Submit</button>
            </form>
        </div>
        </div>
<?php
}else{
    echo("Access denied!"); 
}
    include 'Partials/footer.php';
?>