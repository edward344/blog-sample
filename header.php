<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    
    <?php
    
    if (isset($title))
    {
        echo "<title>" . $title . "</title>";
    }
    else
    {
        echo "<title>Vegetarian Friend</title>";
    }
    
    ?>
    
  <style>
    .gallery {
	margin: 5px;
	border: 1px solid #ccc;
	float: left;
	width: 300px;
    }

    .gallery:hover {
        border: 1px solid #777;
    }

    .gallery img {
        width: 100%;
        height: auto;
    }

  </style>

  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    
        <?php 
        
        if (isset($_SESSION["username"]))
        {
            echo '<a class="navbar-brand" href="">' . $_SESSION["username"] . '</a>';
        }
        
        ?>
        
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">PROFILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="photos.php">PHOTOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="forum.php">FORUM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="members.php">MEMBERS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">SIGN IN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sign_up.php">SIGN UP</a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" href="sign_out.php">SIGN OUT</a>
            </li>
            
            
        </ul>
    </nav>
    
    <header>
        <div class="jumbotron text-center">
            <h1>Vegetarian Friend</h1>
		<p>Connect with vegetarian and vegan friends from all over the world.</p>
        </div>
    </header>

    <div class="container">
    
    
    