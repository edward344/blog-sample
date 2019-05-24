<?php

include 'header.php';

if (isset($_POST["submit"]) && isset($_SESSION["username"]))
{
    $file_name = $_FILES['file']['name'];
	$file_size = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$file_type = $_FILES['file']['type'];
	$file_error = $_FILES['file']['error'];
    
    include 'mysqli_connect.php';
    
    $username = $_SESSION["username"];
    
    $sql = "SELECT path FROM profile WHERE username='$username'";
    
    $result = mysqli_query($conn,$sql);
    
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $current_file = $row["path"];
    
    
        $tmp = explode(".",$file_name);
        $file_ext = strtolower(end($tmp));
        $allowed = array("jpeg","jpg","png");
        
        
        if (in_array($file_ext,$allowed))
        {
            if ($file_error === 0)
            {
                if($file_size < 2097152)
                {
                    $new_file_name = uniqid("",true) . "." . $file_ext;
                        
                    $target_file = "uploads/" . $new_file_name;
                        
                    move_uploaded_file($file_tmp,$target_file);
                    // Insert file name into database
                    $sql = "UPDATE profile SET path='$target_file' WHERE username='$username'";
                    // Delete previous photo
                    if (!unlink($current_file))
                    {
                        $error_msg = "Error deleting file...";
                    }

                    if (!mysqli_query($conn,$sql))
                    {
                        $error_msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }    
                else
                {
                    $error_msg = "Your file is too big...";
                    echo "file size: " . $file_size;
                }
            }
            else
            {
                $error_msg = "There was an error uploading your file...";
            }
                
        }
        else 
        {
            $error_msg = "You cannot upload this type of file....";
        }
    
    }
    else
    {
        $error_msg = "There was a problem updating your photo...";
    }

    mysqli_close($conn);

    if (isset($error_msg))
    {
        die($error_msg);
    }

    header("Location: profile.php");
    die();

}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="profile-photo">Upload a new photo (GIF, JPG or PNG; limit 2MB)</label>
    <input type="file" name="file" class="form-control-file" id="profile-photo">
  </div>
    <button class="btn btn-primary" type="submit" name="submit">UPLOAD</button>
  
</form>

<?php include 'footer.php'; ?>