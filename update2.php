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

   $City = $_POST['City'];
    $Country = $_POST['Country'];
    $Address_line = $_POST['Address_line'];
    $Office_Code = $_POST['Office_Code'];

    $sql = "UPDATE offices SET City='$City', Country='$Country', Address_line='$Address_line', Office_Code='$Office_Code' WHERE ID= $ID";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view2.php';</script>";
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
<center> <h2>Update Office Info</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM offices WHERE id = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  City: </h4>
  <input type="text" name="City" value="<?php echo $row['City'] ?>">
 <h4>  Country: </h4>
  <input type="text" name="Country" value="<?php echo $row['Country'] ?>">
<h4>  Address line: </h4>
  <input type="text" name="Address_line" value="<?php echo $row['Address_line'] ?>">
  <h4>  Office Code: </h4>
  <input type="text" name="Office_Code" value="<?php echo $row['Office_Code'] ?>">

  <?php }
}  ?>
 <p> <input type="submit" name="update" value="Update Location"></p> 
</center>
</form> 
    



</style>
</body>
</html>