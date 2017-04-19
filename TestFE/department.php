<?php 
include("connect.php");
	
	
	//table
	$sql="SELECT * FROM hrms.";
	$records=mysqli_query($HRMS, $sql);

?>

<!DOCTYPE html>
<html>
<body>



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
    <h1>Departments</h1>
	
	<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Actions</th> 
	</tr>
	
	<!-- table listing for departments-->
	<?php
	while($deptview= mysqli_fetch_assoc($records)){
		
		echo "<tr>";
		
		echo "<td>".$deptview['SID']."</td>";
		
		echo "<td>".$deptview['D_name']."</td>";
		
		echo "<td> Delete-link to be created -  </td>";
		
		echo "</tr>";
		
	   	
	}

	?>
	
	
	
	
	

</table>
	
  </div>

<!-- end body  -->

</div>