<?php 
include("connect.php");
	
	
	//table
	$sql="SELECT * FROM hrms.alldepartments";
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
			<th>Serial No.</th>
			<th>D_name</th>
			<th>SID</th>
		</tr>
		
		<!-- table listing for departments-->
		<?php 
			$i = 0;
			$sql = "SELECT * FROM department";
			$result = $HRMS->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			     	$i++;
			         ?>
						
						<tr>
							<td><?php echo $i ?></td>
						    <td><?php echo $row['D_name'] ?></td>
							<td><?php echo $row['SID'] ?></td>
						</tr>


			         <?php
			     }
			}

			$HRMS->close();

		?>
	</table>
	
  </div>

<!-- end body  -->

</div>