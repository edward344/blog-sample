<?php

include 'header.php';

if (isset($_POST["submit"]) && isset($_SESSION["username"]))
{
    
    $username = $_SESSION["username"];
    
    include 'mysqli_connect.php';
    
    $relationship_status = mysqli_real_escape_string($conn,$_POST["relationship-status"]);
    
    $sql = "UPDATE profile SET relationship='$relationship_status' WHERE username='$username'";
    
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
      <label for="relation">Relationship Status:</label>
      <select class="form-control" id="relationship-status" name="relationship-status">
        <option>Single</option>
        <option>In a relationship</option>
        <option>Engaged</option>
        <option>Married</option>
        <option>It's complicated</option>
        <option>In an open relationship</option>
        <option>Widowed</option>
        <option>Seperated</option>
        <option>Divorced</option>
      </select>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Save</button>
</form>

<?php include 'footer.php'; ?>