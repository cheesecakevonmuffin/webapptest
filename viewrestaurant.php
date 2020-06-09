<?php 
       $serverName = "testdbtp048202.database.windows.net";  
       $connectionOptions = array( 
                            "Database" => "testdbtp048202", 
                            "Uid" => "cheesecakevonmuffin", 
                            "PWD" => "Ziqsan97"); 
                         
//Establishes the connection 
       $conn = sqlsrv_connect($serverName, $connectionOptions); 
        
if (!$conn) 
{ 
           die("Error connection: ".sqlsrv_errors()); 
       } 
       echo "Got in Fam!"; 
       $tsql= "SELECT * FROM [dbo].[restaurant]"; 
       $getResults= sqlsrv_query($conn, $tsql); 
                         
 if ($getResults == FALSE) 
 { 
            die(sqlsrv_errors()); 
   } 
                         
 
       while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))  
 { 
            echo "<tr>"; 
            echo "<td>". $row['restaurant_id'] . "</td>"; 
            echo "<td>". $row['restaurant_name'] ."</td>"; 
            echo "<td>". $row['restaurant_address'] . "</td>"; 
            echo "<td>". $row['restaurant_phone'] . "</td>"; 
            echo "</tr>"; 
        } 
       sqlsrv_free_stmt($getResults); 
?>
