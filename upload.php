<?php

include 'mysqli_connect.php';

$url_message = "";

if (isset($_POST["submit"]))
{
	$file_name = $_FILES['file']['name'];
	$file_size = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$file_type = $_FILES['file']['type'];
	$file_error = $_FILES['file']['error'];
    
    $comment = mysqli_real_escape_string($conn,$_POST["text"]);
	
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
				$sql = "INSERT INTO images (path,comment) VALUES ('$target_file','$comment')";

				if (mysqli_query($conn,$sql))
                {
                    $url_message = "success";
                }
                else
                {
                    $url_message = "error-database";
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                   	
				}
            else
            {
                $url_message = "file-too-big";
            }
        }
        else
        {
            $url_message = "error-uploading-file";
        }
            
    }
    else 
    {
        $url_message = "error-type";
    }
    
    
}


mysqli_close($conn);

header("Location: photos.php?message=" . $url_message);

?>