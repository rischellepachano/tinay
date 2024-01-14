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

   $School_Graduated = $_POST['School_Graduated'];
    $School_Year = $_POST['School_Year'];
    $Strand = $_POST['Strand'];
    $Address = $_POST['Address'];

    $sql = "UPDATE background SET School_Graduated='$School_Graduated', School_Year='$School_Year', Strand='$Strand', Address='$Address' WHERE ID= $ID";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view1.php';</script>";
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
<center> <h2>Update Background Information</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM background WHERE id = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  School_Graduated: </h4>
  <input type="text" name="School_Graduated" value="<?php echo $row['School_Graduated'] ?>">
 <h4>  School_Year: </h4>
  <input type="text" name="School_Year" value="<?php echo $row['School_Year'] ?>">
<h4>  Strand: </h4>
  <input type="text" name="Strand" value="<?php echo $row['Strand'] ?>">
  <h4>  Address: </h4>
  <input type="text" name="Address" value="<?php echo $row['Address'] ?>">

  <?php }
}  ?>
 <p> <input type="submit" name="update" value="Update Background Information"></p> 
</center>
</form> 
    



</style>
</body>
</html>