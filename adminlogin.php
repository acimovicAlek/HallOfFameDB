<?php
    include 'Partials/header.php';
?>
            <div class = "container">
            <div class = "row">
                <div class = "heading">Login</div>
            </div>
        <div class="login_form">
            <form action="Partials/login.php" method = "post">
            <div id="error_username" class="hide">Username is not valid!</div>
            <input id="username_inp"  type="text" placeholder="Enter Username" name="uname" onfocusout="validateName('username_inp','error_username')" required>
            <div id = "error_password" class = "hide">Password is not valid!</div>
            <input id = "password_inp" type="password" placeholder="Enter Password" name="psw" onfocusout="validatePassword('password_inp','error_password')" required>

            <button type="submit">Login</button>
            </form>
        </div>
        </div>
<?php
    include 'Partials/footer.php';
?>
