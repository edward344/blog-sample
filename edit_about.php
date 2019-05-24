<?php

include 'header.php';

if (isset($_POST["submit"]) && isset($_SESSION["username"]))
{
    if (empty($_POST["about"]))
    {
        header("Location: profile.php");
        die();
    }
    
    $username = $_SESSION["username"];
    
    include 'mysqli_connect.php';
    
    $text = mysqli_real_escape_string($conn,$_POST["about"]);
    
    $sql = "UPDATE profile SET about='$text' WHERE username='$username'";
    
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
        <label for="about">About: </label>
        <textarea class="form-control" name="about" rows="5" id="about"></textarea>
        <button class="btn btn-primary" type="submit" name="submit">Save</button>
    </div>
</form>

<?php include 'footer.php'; ?>