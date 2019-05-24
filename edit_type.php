<?php

include 'header.php';

if (isset($_POST["submit"]) && isset($_SESSION["username"]))
{
    
    $username = $_SESSION["username"];
    
    include 'mysqli_connect.php';
    
    $vegetarian_type = mysqli_real_escape_string($conn,$_POST["vegetarian-type"]);
    
    $sql = "UPDATE profile SET type='$vegetarian_type' WHERE username='$username'";
    
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
      <label for="type of vegetarian">Type of vegetarian:</label>
      <select class="form-control" id="vegetarian-type" name="vegetarian-type">
        <option>Vegan</option>
        <option>Vegetarian</option>
        <option>Lacto-Ovo vegetarian</option>
        <option>Ovo vegetarian</option>
        <option>Lacto vegetarian</option>
        <option>New vegetarian</option>
        <option>Raw vegan</option>
        <option>Fruitarian</option>
        <option>Pescatarian</option>
        <option>Semi vegetarian</option>
      </select>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Save</button>
</form>

<?php include 'footer.php'; ?>