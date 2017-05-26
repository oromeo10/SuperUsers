<?php
global $HRMS ;
//Your password on your local machine goes in $pass //	
$pass = 'Mike';
  define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root' );
    define('DB_PASSWORD', $pass );
     define('DB_NAME', 'hrms');
   
   $HRMS = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
   
   // Check connection
if ($HRMS->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{ 
echo 'Connected successfully <br>'; 

}

//create tables for database by reading the below file as long as it is located in the same directory as the .php files used//



?> 
