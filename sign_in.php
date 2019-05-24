<?php

    session_start();
    

    if (isset($_POST["submit"]))
    {
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $db_password = "";
        
        $no_users = false;
        
        include 'mysqli_connect.php';
        
        $sql = "SELECT password FROM users WHERE username='$username'";
        
        
        $result = mysqli_query($conn,$sql);
 
        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            
            $db_password = $row["password"];
            
        }
        else
        {
            $no_users = true;
        }
       
        mysqli_close($conn);
        
        if ($no_users)
        {
            header("Location: login.php?message=wrong-user");
        }
        else if ($db_password == $password)
        {
            
            $_SESSION["username"] = $username;
            
            header("Location: index.php");
        }
        else
        {
            header("Location: login.php?message=wrong-password");
        }
        
        
        
    }

?>