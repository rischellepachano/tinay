<?php 
include('db1.php');

// Retrieve data from the database
$sql = "SELECT * FROM offices";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<center><h3> Office locations  </h3> </center> ";

     echo " <center> <h2> <a href='create2.php'>Add </a> </h2> </center> ";

   echo "<table border =  '1' width = '100%'><tr><th> ID </th>  <th> City </th> <th> Country</th> <th> Address_line </th> <th> Office_Code </th> <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $ID = $row['ID'];                
              $School_Graduated = $row['City'];        
              $School_Year= $row['Country'];         
              $Strand = $row['Address_line'];
              $Address = $row['Office_Code'];


         echo "<tr>  
          <td>" . $row["ID"]. "</td> 
         <td>" . $row["City"]. "</td> 
         <td> " . $row["Country"]. "</td>
         <td> " . $row["Address_line"]. "</td> 
         <td>" . $row["Office_Code"]. "</td> " ;

         echo " <td> <a href='update2.php?user_id={$ID} ' > UPDATE</a> </td>";

         echo " <td> <a href='delete2.php?user_id={$ID}' >Delete</a> </td>";


        


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