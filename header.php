<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
     
        <meta name="description" content="Our school">
        <meta name="author" content="GUlay, Edgar Edward">

        <title>St. Mary's</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        
        <link rel="icon" href="images/logo.jpg">
    </head>
    <body>
    
        <div class="navbar">
            <div class="container flex">

                <nav>
                    <ul >
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contacts.php">contacts</a></li>
                        <li><a href="register.v2.php">Register</a></li>
                        <li><a href="staff.php">staff</a></li>
                        
                        <?php if(!isset($_SESSION['id'])){?>
                        <li><a href="login.php">Login</a></li>
                        <?php }else{ ?>
                            <li><a href="alumni.php">Alumni</a></li>
                            <li><a href="logout.php">logout</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>