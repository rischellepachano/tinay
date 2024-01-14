<?php include('db1.php');


// Insert data into the database
if (isset($_POST['submit'])) {
    $City = $_POST['City'];
    $Country = $_POST['Country']; 
    $Address_line = $_POST['Address_line'];
    $Office_Code = $_POST['Office_Code'];
    
    $sql = "INSERT INTO offices (City, Country, Address_line, Office_Code) VALUES ('$City', '$Country', '$Address_line', '$Office_Code')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view2.php';</script>";
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

    <center> <h2>Add Office Locations</h2> 

   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      City:<br>
      <input type="text" name="City"><br>
         Country:<br>
      <input type="text" name="Country"><br>
      Address line:<br>
      <input type="text" name="Address_line"><br>
      Office Code:<br>
      <input type="text" name="Office_Code"><br><br>
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