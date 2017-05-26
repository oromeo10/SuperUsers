<?php
include("connect.php");
	
	
	//table
	$sql="SELECT * FROM hrms.employee";
	$records=mysqli_query($HRMS, $sql);
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
  
  <head>
  <title>Employee List</title>
  </head>

<BODY bgcolor ="pink">
	
	<?php

		if(isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
		} else {
			header('Location: EmployeeList.php');
		}


		
		$sql = "DELETE FROM employee WHERE EID = $id";

		if ($HRMS->query($sql) === TRUE) {
		    header("Location: EmployeeList.php");
		} else {
		    echo "Error deleting record: " . $HRMS->error;
		}

		$HRMS->close();






	?>

	



	</body>
	
  </div>

<!-- end body  -->

</div>
</body>
</html>