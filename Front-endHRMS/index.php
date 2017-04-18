<!-- this is the login page which will be the first page(index page) for our Project -->
<?php
include("connect.php");
   session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Invalid Login details";
      }
   }


?>


<!DOCTYPE html>
<html>
<body>




<?php
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
    <h1 id="adL">ADMIN LOGON</h1>
    <form class="form" action="home.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
      User Name:
      <input type="text" name="username" placeholder="Username"> 
      <br><br>
      Password: &emsp;  
      <input type="text" name="password" placeholder="Password">
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