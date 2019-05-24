<?php
	require_once 'mysqli_connect.php';
?>

<!DOCTYPE html>

<html lang="en-US">

<head>

    <title>Database Test</title>

</head>

<body>

    <h1>Hello world!</h1>
    
<?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "id: " . $row["id"] . "<br>";
        echo "username: " . $row["username"] . "<br>";
        echo "password: " . $row["password"] . "<br>";
        echo "email: " . $row["email"] . "<br>";
    }
}
else
{
    echo "0 results";
}

mysqli_close($conn);
?>

</body>

</html>