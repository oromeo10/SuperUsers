<?php
global $HRMS ;
//Your password on your local machine goes in $pass //	
$pass = 'Jennif3r';
  define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root' );
    define('DB_PASSWORD', $pass );
   
   $HRMS = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
   
   // Check connection
if ($HRMS->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{ 
echo 'Connected successfully <br>'; 

}

//create tables for database by reading the below file as long as it is located in the same directory as the .php files used//



?> 
