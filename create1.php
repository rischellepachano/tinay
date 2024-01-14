<?php include('db1.php');


// Insert data into the database
if (isset($_POST['submit'])) {
    $School_Graduated = $_POST['School_Graduated'];
    $School_Year = $_POST['School_Year']; 
    $Strand = $_POST['Strand'];
    $Address = $_POST['Address'];
    
    $sql = "INSERT INTO background (School_Graduated, School_Year, Strand, Address) VALUES ('$School_Graduated', '$School_Year', '$Strand', '$Address')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view1.php';</script>";
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

    <center> <h2>Add Background Information</h2> 

   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      School Graduated:<br>
      <input type="text" name="School Graduated"><br>
        School Year:<br>
      <input type="text" name="School Year"><br>
      Strand:<br>
      <input type="text" name="Strand"><br>
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