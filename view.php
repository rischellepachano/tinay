<?php 
include('db.php');

// Retrieve data from the database
$sql = "SELECT * FROM info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<center><h3> Personal Information  </h3> </center> ";

     echo " <center> <h2> <a href='create.php'>Add </a> </h2> </center> ";

   echo "<table border =  '1' width = '100%'><tr><th> ID </th>  <th> Name </th> <th> Email</th> <th> Phone </th> <th> Address </th> <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $ID = $row['ID'];                
              $Name = $row['Name'];        
              $Email= $row['Email'];         
              $Phone = $row['Phone'];
              $Address = $row['Address'];


         echo "<tr>  
          <td>" . $row["ID"]. "</td> 
         <td>" . $row["Name"]. "</td> 
         <td> " . $row["Email"]. "</td>
         <td> " . $row["Phone"]. "</td> 
         <td>" . $row["Address"]. "</td> " ;

         echo " <td> <a href='update.php?user_id={$ID} ' > UPDATE</a> </td>";

         echo " <td> <a href='delete.php?user_id={$ID}' >Delete</a> </td>";


        


        echo "</tr>";    

    }
        echo "</table>"; 
} else {
    echo "0 results";
} 
?>
<style>
table{
    font-size:  15px;
    
}
</style>