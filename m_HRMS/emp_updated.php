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

	<script>
	function delete_confirm() {
		return confirm('Are you sure want to delete this data?');
	}
	</script>

  </head>

<BODY bgcolor ="pink">
	
		<h1>Your data has been updated</h1>

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

		

	</table>

	
	</body>
	
  </div>

<!-- end body  -->

</div>
</body>
</html>