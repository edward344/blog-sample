<?php

$title = "My Page - Vegetarian Friend";

include 'header.php';

if (isset($_GET["msg"]))
{
    if ($_GET["msg"] == "no-profile")
    {
        echo "<h4>You need to create your profile...</h4>";
        
    }
}

?>

<a href="edit_profile.php">Create your profile</a>

<?php include 'footer.php'; ?>