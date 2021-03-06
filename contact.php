<?php
    include 'Partials/header.php';
?>       
<div class = "container">
            <div class = "row">
                <div class = "heading">Contact us!</div>
            </div>
        <div class="contact_form">
            <form action="#" method = "post" onsubmit="return validateContact()">
            <div id="error_name" class = "hide">Name is not valid!</div>
            <input id="name_inp" type="text" placeholder="Enter Name" name="cf_name" onfocusout="validateName('name_inp','error_name')" required>
            <div id="error_mail" class = "hide">Email is not valid!</div>
            <input id="mail_inp" type="text" placeholder="Enter Email" name="cf_email"  onfocusout="validateEmail('mail_inp','error_mail')" required>
                <div id="error_msg" class = "hide">Message is not valid!</div>
                <textarea id="msg_inp" placeholder = "Enter Message" name = "cf_message" onfocusout="validateDescription('msg_inp','error_msg')"></textarea>
            <button type="submit">Submit</button>
            </form>
        </div>
        </div>
<?php
    include 'Partials/footer.php';
?>