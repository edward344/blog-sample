<?php

$title = "Discussion Forum - Vegetarian Friend";
include 'header.php';

?>

<div class="container">
    <h2>Clever Places to Put Your Built in Wine Cooler</h2>
    <img src="built-in-wine-cooler.jpg">
    
    <p>If you are planning to buy a built in wine cooler for your home, then you should prefer to choose the best
    brand that delivers reliable products. So yes, after buying the best built in wine cooler you should prefer to 
    find the correct place to place it. As we all know there are so many places present in our home where we can 
    simply place the wine cooler. So yes, you should prefer to think creatively about the place where you actually 
    want to place the cooler. Here we are discussing about some places where you can place the wine cooler:</p>
    
    <h3>1. Kitchen</h3>
    
    <p>First place where you can keep your wine cooler is the kitchen. Most people opt to place the unit in their 
    kitchen so that they would easily take out the drinks while serving to their guests. Obviously it might be 
    inconvenient for you to pour out the drink and serve it to your guests if you have placed the wine cooler 
    somewhere else.</p>
    

    <form method= "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" name="text" rows="5" id="comment"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php

include 'mysqli_connect.php';

if (isset($_POST["submit"]) && isset($_SESSION["username"]))
{
    
    $username = $_SESSION["username"];
    $comment = mysqli_real_escape_string($conn,$_POST["text"]);
    
    $sql = "INSERT INTO comments (username,comment) VALUES ('$username','$comment')";
    
    mysqli_query($conn,$sql);
 
}

echo "<br>";

$sql = "SELECT * FROM comments";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<span style="color:blue">' . $row["username"] . ": </span>";
        echo "<p>" . $row["comment"] . "</p>";
        echo '<hr style="background-color:black">';
    }
}

mysqli_close($conn);

include 'footer.php';
?>
