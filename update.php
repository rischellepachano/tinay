<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $ID = $_GET['user_id'];

   $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];

    $sql = "UPDATE info SET Name='$Name', Email='$Email', Phone='$Phone', Address='$Address' WHERE ID= $ID";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view.php';</script>";
       }  else {
        echo "<script>alert('SOMETHING WENT WRONG!');</script>";

    }

}
}


?> 

<html>
<head>  
<link rel="stylesheet" type="text/css" href="style/style.css">


</head>


<body>
<center> <h2>Update Personal Information</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM info WHERE id = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  Name: </h4>
  <input type="text" name="Name" value="<?php echo $row['Name'] ?>">
 <h4>  Email: </h4>
  <input type="text" name="Email" value="<?php echo $row['Email'] ?>">
<h4>  Phone: </h4>
  <input type="text" name="Phone" value="<?php echo $row['Phone'] ?>">
  <h4>  Address: </h4>
  <input type="text" name="Address" value="<?php echo $row['Address'] ?>">

  <?php }
}  ?>
 <p> <input type="submit" name="update" value="Update User"></p> 
</center>
</form> 
    



</style>
</body>
</html>