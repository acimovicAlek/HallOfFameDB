<?php
session_start();
    if(!isset($_POST["uname"]) || !isset($_POST["psw"])){
        session_destroy();
        echo("<script>alert('Fields are empty.');
        window.location.href='../adminlogin.php';</script>");
    }

$connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'root', '');   $connection -> exec("set names utf8");

    $query = $connection -> prepare("SELECT * FROM celeb WHERE username = ? and password = ? ");
    $query -> bindValue(1, $_POST["uname"], PDO::PARAM_STR);
    $query -> bindValue(2, $_POST["psw"], PDO::PARAM_STR);


    if($query)
    {
        $_SESSION["admin"] = $_POST["uname"];
        echo("<script>alert('Sucess!');
        window.location.href='../index.php';</script>
        ");
    }
    else
    {
        session_destroy();
        echo("<script>alert('Credentials do not match!');
        window.location.href='../adminlogin.php';
        </script>");
    }
?>
