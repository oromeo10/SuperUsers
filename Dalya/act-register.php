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
  header("Location:index.php"); 
}
?>
