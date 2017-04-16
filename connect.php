<?php
   define('DB_SERVER', 'localhost:8888');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Dontforget1993');
   define('DB_DATABASE', 'HRMS');
   $HRMS = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   // Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?> 
