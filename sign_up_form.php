<?php

session_start();

if (isset($_POST["submit"]))
    
{
    include 'mysqli_connect.php';
    
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    
    $sql = "INSERT INTO users (username,password,email) VALUES 
            ('$username','$password','$email')";
            
    if (mysqli_query($conn,$sql))
    {
        $_SESSION["username"] = $username;
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    header("Location: index.php");
    
}

?>