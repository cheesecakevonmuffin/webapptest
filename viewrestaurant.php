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
       echo "Got in Fam"; 
  
?> 
