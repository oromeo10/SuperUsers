<?php
//conne to database 
include ("connect.php"); 

$username = $_POST[ 'username']
$storeid = $_POST[ 'storeid']
$email = $_POST[ 'email']
$password = $_POST['password']
$query = "INSERT INTO register(u_name, s_id, email, u_pass)
          Values ('username','storeid', 'email', 'password')";

if(!mysqli_query($HRMS, $query)){
  echo "error".mysqli_error($HRMS); 

}
else{
  header("Location:home.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register , login and logout user php mysql</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Register, login and logout user php mysql</h1>
</div>

<form method="post" action="register-act.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Store ID: </td>
           <td><input type="text" name="storeid" class="textInput"></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
     
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
  
</table>
</form>
</body>
</html>