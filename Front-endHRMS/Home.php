<?php

include("connect.php");
//create tables for database by reading the below file as long as it is located in the same directory as the .php files used//

$sqlErrorCode = 0;
$sqlFileToExecute = 'HRMSpopulator.sql';
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
 
}




?>


<!DOCTYPE html>
<html>
<body>

<?php


?>

<link rel="stylesheet" href="style.css" type="text/css">


<br> 
<img id= "logo" src="logo.png" width="240" height="100" title="Logo of a company" alt="Logo of a company" />
</br> 
<HR WIDTH="100%" COLOR="#6699FF" SIZE="30">
<HR WIDTH="100%" SIZE="3"> 
<div class="body-content">
  
  <p><button onclick="window.location.href='EmployeeList.php'"
             class="linkButton_EL">Employee List</button></p>
  <p><button onclick="window.location.href='Add_New_Employee.php'"
             class="linkButton_NE">Add New Employees</button></p>
  <p><button onclick="window.location.href='department.php'"
             class="linkButton_D">Departments </button></p>
  <p><button onclick="window.location.href='benefits.php'"
             class="linkButton_B">Benefits</button></p>
  <p><button onclick="window.location.href='payroll.php'"
             class="linkButton_P">Payroll </button></p>
  <p><button class="linkButton_L">logout </button>
<!--    //end session for logout. 
 -->
</div>
</body>
</html>