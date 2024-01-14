<?php 
include('db1.php');

// Retrieve data from the database
$sql = "SELECT * FROM background";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<center><h3> Background Information  </h3> </center> ";

     echo " <center> <h2> <a href='create1.php'>Add </a> </h2> </center> ";

   echo "<table border =  '1' width = '100%'><tr><th> ID </th>  <th> Sschool_Graduated </th> <th> School_Year</th> <th> Strand </th> <th> Address </th> <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $ID = $row['ID'];                
              $School_Graduated = $row['School_Graduated'];        
              $School_Year= $row['School_Year'];         
              $Strand = $row['Strand'];
              $Address = $row['Address'];


         echo "<tr>  
          <td>" . $row["ID"]. "</td> 
         <td>" . $row["School_Graduated"]. "</td> 
         <td> " . $row["School_Year"]. "</td>
         <td> " . $row["Strand"]. "</td> 
         <td>" . $row["Address"]. "</td> " ;

         echo " <td> <a href='update1.php?user_id={$ID} ' > UPDATE</a> </td>";

         echo " <td> <a href='delete1.php?user_id={$ID}' >Delete</a> </td>";


        


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