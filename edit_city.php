<?php

include 'header.php';

if (isset($_POST["submit"]) && isset($_SESSION["username"]))
{
    if (empty($_POST["city"]))
    {
        header("Location: profile.php");
        die();
    }
    
    $username = $_SESSION["username"];
    
    include 'mysqli_connect.php';
    
    $city = mysqli_real_escape_string($conn,$_POST["city"]);
    
    $sql = "UPDATE profile SET city='$city' WHERE username='$username'";
    
    if (mysqli_query($conn,$sql))
    {
        $error = false;
    }
    else
    {
        $error = true;
    }
    
    mysqli_close($conn);
    
    if ($error)
    {
        die("There was a problem updating your profile...");
    }
    else
    {
        header("Location: profile.php");
        die();
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label for="city">City: </label>
        <input class="form-control" type="text" name="city">
        <button class="btn btn-primary" type="submit" name="submit">Save</button>
    </div>
</form>

<?php include 'footer.php'; ?>