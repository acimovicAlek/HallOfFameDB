<?php 
session_start();
    if(!isset($_POST["uname"]) || !isset($_POST["psw"])){
        session_destroy();
        echo("<script>alert('Fields are empty.');
        window.location.href='adminlogin.php';</script>");
    }
    
    $feed = file_get_contents('../XML/admins.xml');
    $admins = simplexml_load_string($feed);
    if($_POST["uname"] == $admins->username && $_POST["psw"] == $admins->password)
    {
        $_SESSION["admin"] = $_POST["uname"];  
        echo("<script>alert('Sucess!');
        window.location.href='index.php';</script>
        ");
    }
    else
    {
        session_destroy();
        echo("<script>alert('Credentials do not match!');
        window.location.href='adminlogin.php';
        </script>");
    }
?>