<!-- this is the login page which will be the first page(index page) for our Project -->

<?php
include("connect.php");



?>
<?php
global $store;
$error = ''; //error message if any of three fields left blank;//
if(isset($_POST['login'])){
if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['sid'])){
		$error = "Invalid login. Please enter all fields of$ data";
		
	}
	else{
		$uname = $_POST['username'];
		$upass = $_POST['password'];
		$store = $_POST['sid'];
		
		$db = mysqli_select_db($HRMS, "hrms");
		
		$sql = mysqli_query($HRMS, "SELECT * from register WHERE u_name = '$uname' AND u_pass = '$upass' AND s_id = '$store'");
		
		$count = mysqli_num_rows($sql);
		
		if($count == 1){
			header("Location: Home.php");
			$load = "INSERT INTO hrms.store(SID, S_phone, S_mgrID, S_city, S_state, S_zip)
			VALUES('$store', '6259998746', null, 'Atlanta', 'GA', '30333'); ";
			
			//yet to populate departments//;
			
			

			if (mysqli_query($HRMS, $load)) {
				echo "New record created successfully";
				} else {
					echo "Error: " . $load . "<br>" . mysqli_error($HRMS);
					}
			
		}
		else{
			$error = "Invalid login. Please ensure that your credentials are correct";
			
		}
		mysqli_close($HRMS);
	}
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
    <span> <?php echo $error ?> </span> 
	<h1 id="adL">ADMIN LOGIN</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off"> 
	  Store ID:
      <input type="text" name="sid" placeholder="Store ID Number"> 
      <br><br>
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
