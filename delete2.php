
<?php include 'db1.php';
// Connect to the database




// sql to delete a record
     if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];

         // SQL query to delete data from user table where id = $userid
         $sql = "DELETE FROM offices WHERE ID = $userid";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully Deleted the record!');</script>";
         echo "<script>document.location='view2.php';</script>";
       }  else {
        echo "<script>alert('SOMETHING WENT WRONG!');</script>";

}
       
     }

              ?>


