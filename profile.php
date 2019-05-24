<?php 

$title = "My Page - Vegetarian Friend";

include 'header.php'; 

if (isset($_GET["msg"]))
{
    if ($_GET["msg"] == "success")
    {
        echo '<div class="alert alert-success">';
        echo '<strong>Success!</strong> Your profile has been created successfully.';
        echo '</div>';
    }
    
    else if ($_GET["msg"] == "error-database")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> Error with the Database.';
        echo '</div>';
    }
    
    else if ($_GET["msg"] == "file-too-big")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> Your file is too big!';
        echo '</div>';
    }
    
    else if ($_GET["msg"] == "error-uploading-file")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> There was an error uploading your file!';
        echo '</div>';
    }
    
    else if ($_GET["msg"] == "error-type")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> You cannot uploads files of this type!';
        echo '</div>';
    }
}


if (!isset($_SESSION["username"]))
{
    die("You need to sign in to view your profile...");
}

include 'mysqli_connect.php';

$username = $_SESSION["username"];

$sql = "SELECT * FROM profile WHERE username='$username'";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    
    $image_path = $row["path"];
    $email = $row["email"];
    $name = $row["name"];
    $gender = $row["gender"];
    $country = $row["country"];
    $city = $row["city"];
    $vegetarian_type = $row["type"];
    $relationship_status = $row["relationship"];
    $about = $row["about"];
}
else
{
    $error = true;
}

mysqli_close($conn);

if (isset($error))
{
    header("Location: no_profile.php?msg=no-profile");
    die();
}

?>

<h1 class="text-center">Welcome <?php echo $name ?></h1>

<br style="line-height:10">

<div class="row">
    <div class="col-sm-4">
        <div class='gallery'>
            <img src="<?php echo $image_path ?>" alt="profile photo">
            <a href="change_photo.php">Change photo</a>
        </div>
        
    </div>

    <div class="col-sm-8">
        <h3>PROFILE INFORMATION</h3>

        <h4>Type of Vegetarian</h4>
        <p><?php echo $vegetarian_type ?></p>
        <p class="text-right"><a href="edit_type.php">Change type of vegetarian</a></p>

        <h4>Relationship status</h4>
        <p><?php echo $relationship_status ?></p>
        <p class="text-right"><a href="edit_relationship.php">Change relationship status</a></p>

        <h4>About</h4>
        <p><?php echo $about ?></p>
        <p class="text-right"><a href="edit_about.php">Edit</a></p>

        <h4>Email</h4>
        <p><?php echo $email ?></p>
        <p class="text-right"><a href="edit_email.php">Change email</a></p>

        <h4>Country</h4>
        <p><?php echo $country ?></p>
        <p class="text-right"><a href="edit_country.php">Change country</a></p>

        <h4>City</h4>
        <p><?php echo $city ?></p>
        <p class="text-right"><a href="edit_city.php">Change city</a></p>

        <h4>Gender</h4>
        <p><?php echo $gender ?></p>
    </div>
</div>

<?php include 'footer.php'; ?>