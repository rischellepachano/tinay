<?php include('db.php');


// Insert data into the database
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email']; 
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    
    $sql = "INSERT INTO info (Name, Email, Phone, Address) VALUES ('$Name', '$Email', '$Phone', '$Address')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>



<html>
<head>

    <link rel="stylesheet" type="text/css" href="style/style.css">


    </head>
<body>

    <center> <h2>Add Personal Information</h2> 

   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Name:<br>
      <input type="text" name="Name"><br>
        Email:<br>
      <input type="text" name="Email"><br>
      Phone:<br>
      <input type="text" name="Phone"><br>
      Address:<br>
      <input type="text" name="Address"><br><br>
      <input type="submit" name="submit" value="Submit"> 
      <a href="view.php">BACK </a>  </center>
      <style type="text/css">
    input[type=text] {

   width: 40%;
  padding: 12px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
  align-items: center;
}  

</body>
</html>