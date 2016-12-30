<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        </head>
    <body>
        <div class="nav">
            <ul>
                <li><a onclick = "ajaxLoad('home.html')">Home</a></li>
                <li><a onclick = "ajaxLoad('contact.html')">Contact</a></li> 
                <li><a onclick = "ajaxLoad('gallery.html')">Gallery</a></li>
                
                <?php
                if(isset($_SESSION["admin"])){ 
                ?>
                    <li><a href = 'add_celebs.php'>Dodaj Celeb</a></li>
                    <li><a href = 'adminpanel.php'>Admin Panel</a></li>
                <?php 
                }
                ?>
                
                <?php
                if(!isset($_SESSION["admin"])){ 
                ?>
                    <li><a href = 'adminlogin.php'>Login</a></li>
                <?php 
                                            }else{
                ?>
                    <li><a href = 'Partials/logout.php'>Logout</a></li>
                <?php 
                }
                   ?>
            </ul>
        </div>