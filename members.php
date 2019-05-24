<?php

$title = "Members - Vegetarian Friend";
include 'header.php';

include 'mysqli_connect.php';

$sql = "SELECT username,path,country,city FROM profile";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        $username = $row["username"];
        $photo_file = $row["path"];
        $country = $row["country"];
        $city = $row["city"];
        
        echo '<div class="row">';
            echo '<div class="col-sm-4">';
                echo '<div class="gallery">';
                    echo '<img src=' . $photo_file . ' alt="profile photo">';
                echo '</div>';
            echo '</div>';
            
            echo '<div class="col-sm-8">';
                echo '<h4>' . $username . '</h4>';
                echo '<p>' . $country . '</p>';
                echo '<p>' . $city . '</p>';
            echo '</div>';
        echo '</div>';
        
        
    }
}


mysqli_close($conn);

include 'footer.php';
?>