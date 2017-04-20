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
	
	<table width="600" border="1" cellpadding="1" cellspacing="1" class="employee_table">
		<tr>
			<th>SL No.</th>
		    <th>f_name</th>
			<th>m_initial</th>
			<th>l_name</th>
			<th>E_ssn</th>
			<th>E_phone</th>
		    <th>E_city</th>
			<th>E_street</th>
			<th>E_state</th>
			<th>E_email</th>
			<th>Date_of_hire</th>
			<th>dbirth</th>
			<th>gender</th>
			<th>dep_contact</th>
			<th>disability</th>
			<th>ethnicity</th>
			<td>Action</td>
		</tr>

		<?php 
			$i = 0;
			$sql = "SELECT * FROM employee";
			$result = $HRMS->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			     	$i++;
			         ?>
						
						<tr>
							<td><?php echo $i ?></td>
						    <td><?php echo $row['f_name'] ?></td>
							<td><?php echo $row['m_initial'] ?></td>
							<td><?php echo $row['l_name'] ?></td>
							<td><?php echo $row['E_ssn'] ?></td>
							<td><?php echo $row['E_phone'] ?></td>
						    <td><?php echo $row['E_city'] ?></td>
							<td><?php echo $row['E_street'] ?></td>
							<td><?php echo $row['E_state'] ?></td>
							<td><?php echo $row['E_email'] ?></td>
							<td><?php echo $row['Date_of_hire'] ?></td>
							<td><?php echo $row['dbirth'] ?></td>
							<td><?php echo $row['gender'] ?></td>
							<td><?php echo $row['dep_contact'] ?></td>
							<td><?php echo $row['disability'] ?></td>
							<td><?php echo $row['ethnicity'] ?></td>
							<td>
								<a href="update_employee.php?id=<?php echo $row['EID'] ?>">Edit</a> | 
								<a href="delete_employee.php?id=<?php echo $row['EID'] ?>" onclick="return delete_confirm();">Delete</a>
							</td>
						</tr>


			         <?php
			     }
			}

			$HRMS->close();

		?>

		

	</table>

	
	</body>
	
  </div>

<!-- end body  -->

</div>
</body>
</html>