<!-- this is the login page which will be the first page(index page) for our Project -->

<?php
include("connect.php");
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
 
}
?>

<!DOCTYPE html>
<html>
<body>

<?php
?>

<link rel="stylesheet" href="register.css" type="text/css">
<br> 
<img id= "logo" src="logo.png" width="240" height="100" title="Logo of a company" alt="Logo of a company" />
</br> 
<HR WIDTH="100%" COLOR="#6699FF" SIZE="30">
<HR WIDTH="100%" SIZE="3"> 

<!-- body for registration  -->
<link rel="stylesheet" href="style.css" type="text/css">
<div class="register-form">
  <div class="module">
    <h1 id="adL">ADMIN LOGIN</h1>
    <form class="form" action="Home.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
      User Name:
      <input type="text" name="username" placeholder="Username"> 
      <br><br>
      Password: &emsp;  
      <input type="password" name="password" placeholder="Password">
      <br> <br> <br>
    <input type="submit" name="login" value="Login">
    <h5><a href="register.php">New User Registration</a>
</h5>
     
</a>

  <br>
  <br>

    </form>
  </div>

<!-- end body  -->

</div>
