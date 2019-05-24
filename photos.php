<?php

$title = "Photos - Vegetarian Friend";

include 'header.php';

if (isset($_GET["message"]))
{
    if ($_GET["message"] == "success")
    {
        echo '<div class="alert alert-success">';
        echo '<strong>Success!</strong> The image has been uploaded successfully.';
        echo '</div>';
    }
    
    else if ($_GET["message"] == "error-database")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> Error with the Database.';
        echo '</div>';
    }
    
    else if ($_GET["message"] == "file-too-big")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> Your file is too big!';
        echo '</div>';
    }
    
    else if ($_GET["message"] == "error-uploading-file")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> There was an error uploading your file!';
        echo '</div>';
    }
    
    else if ($_GET["message"] == "error-type")
    {
        echo '<div class="alert alert-danger">';
        echo '<strong>Danger!</strong> You cannot uploads files of this type!';
        echo '</div>';
    }
}

?>


<form action="upload.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload image to the website</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
    <label for="exampleComments">Comment:</label>
    <textarea class="form-control" name="text" rows="5" id="comment"></textarea>
	<button type="submit" name="submit" class="btn btn-primary">UPLOAD</button>
  </div>
</form>



<?php

include 'mysqli_connect.php';

$sql = "SELECT * FROM images";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<div class='gallery'>";
		echo "<img src='" . $row["path"] . "' alt='image' width='600' height='400'>";
        echo "<p>" . $row["comment"] . "</p>";
		echo "</div>";
        
    }
}

mysqli_close($conn);

include 'footer.php';

?>