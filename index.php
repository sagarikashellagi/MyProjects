<?php 
$conn = mysqli_connect('localhost','root','','practice') or die("" . mysqli_error("Connection Failed"));
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<form action="" method="POST">
<div class="container" style="margin-top:20px;">
  <!-- <h1>Helloooooo</h1> -->
        <input type="text" name="name" placeholder="Enter Name">
        <input type="submit" name="submit" value="Save">
    </div>
</form>
   
  </body>
</html>
<?php 
if(isset($_POST['submit'])){
    // echo "hiii";
$name = $_POST['name'];
// echo $name;
// echo "INSERT INTO `tbl_form`(`name`) VALUES ('$name')";
mysqli_query($conn, "INSERT INTO `tbl_form`(`name`) VALUES ('$name')");

}
?>
