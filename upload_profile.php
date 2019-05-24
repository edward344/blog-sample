<?php

session_start();

include 'mysqli_connect.php';

if (isset($_POST["submit"]))
{
    $file_name = $_FILES['file']['name'];
	$file_size = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$file_type = $_FILES['file']['type'];
	$file_error = $_FILES['file']['error'];
    
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $name = mysqli_real_escape_string($conn,$_POST["name"]);
    $gender = mysqli_real_escape_string($conn,$_POST["gender"]);
    $country = mysqli_real_escape_string($conn,$_POST["country"]);
    $city = mysqli_real_escape_string($conn,$_POST["city"]);
    $vegetarian_type = mysqli_real_escape_string($conn,$_POST["vegetarian-type"]);
    $relationship_status = mysqli_real_escape_string($conn,$_POST["relationship-status"]);
    $about = mysqli_real_escape_string($conn,$_POST["about"]);
    
    $username = $_SESSION["username"];
    
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
				// Insert file and all data into database
				$sql = "INSERT INTO profile (username,path,email,name,gender,country,city,type,relationship,about)
                    VALUES ('$username','$target_file','$email','$name','$gender','$country','$city',
                    '$vegetarian_type','$relationship_status','$about')";

				if (mysqli_query($conn,$sql))
                {
                    $url_msg = "success";  
                }
                else
                {
                    $url_msg = "error-database";
                }
                   	
				}
            else
            {
                $url_msg = "file-too-big";
            }
        }
        else
        {
            $url_msg = "error-uploading-file";
        }
            
    }
    else 
    {
        $url_msg = "error-type";
    }
}

mysqli_close($conn);

header("Location: profile.php?msg=" . $url_msg);

?>