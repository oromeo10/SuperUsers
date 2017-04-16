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

?>

<link rel="stylesheet" href="style.css" type="text/css">


<br> 
<img id= "logo" src="logo.png" width="240" height="100" title="Logo of a company" alt="Logo of a company" />
</br> 
<HR WIDTH="100%" COLOR="#6699FF" SIZE="30">
<HR WIDTH="100%" SIZE="3"> 

<!-- body for registration  -->
<link rel="stylesheet" href="style.css" type="text/css">
<div class="register-form">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="rform"></div>    
      User Name:
      <input type="text" name="username" placeholder="Username"> 
      <br>
      Store ID: &emsp; 
      <input type="text" name="storeid" placeholder="Store Id">
      <br>
      Email: &emsp; &emsp; 
      <input type="text" name="email" placeholder="Email">
      <br>
      Password: &emsp;  
      <input type="text" name="password" placeholder="Password">
      <br> <br> <br>
    <input type="submit" name="register" value="Register">

  <br>
  <br>

    </form>
  </div>

<!-- end body  -->

</div>