<?php

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

$sqlErrorCode = 0;
$sqlFileToExecute = 'HRdiagramtoscriptforhrms.sql';
$f = fopen($sqlFileToExecute,"r+");
$sqlFile = fread($f, filesize($sqlFileToExecute));
$sqlArray = explode(';',$sqlFile);
foreach ($sqlArray as $stmt) {
  if (strlen($stmt)>3 && substr(ltrim($stmt),0,2)!='/*') {
    $result = mysqli_query($HRMS, $stmt);
    if (!$result) {
      $sqlErrorCode = mysqli_errno($HRMS);
      $sqlErrorText = mysqli_error($HRMS);
      $sqlStmt = $stmt;
      break;
    }
  }
}
if ($sqlErrorCode == 0) {
  echo "Script is executed succesfully!";
} else {
  echo "An error occured during installation!<br/>";
  echo "Error code: $sqlErrorCode<br/>";
  echo "Error text: $sqlErrorText<br/>";
  echo "Statement:<br/> $sqlStmt<br/>";
}

?> 
