<?php
	//making connection
	mysql_connect('localhost', 'root', 'Jennif3r');
	//selecting database: enter database name
	mysql_select_db('dbms');
	
	//table
	$sql="SELECT * FROM employee"
	$records=mysql_query($sql);
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
	<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
	<th>Fname</th>
    <th>MI:</th>
	<th>Lname</th>
	<th>Gender</th>
	<th>SSN</th>
	<th>DOB</th>
    <th>Address</th>
	<th>Ethnicity</th>
	<th>Phone</th>
	<th>EmergCont</th>
	<th>Email</th>
    <th>HiredDate</th>
	<th>Position</th>
	<th>SupervName</th>
	<th>JobType</th>

	</table>
	<br> 

	<?php
	while($employee=mysql_fetch_assoc($records)){
		
		echo "<tr>";
		
		echo "<td>".$employee['Fname']."</td>";
		
		echo "<td>".$employee['MI']."</td>";
		
		echo "<td>".$employee['Lname']."</td>";
		echo "<td>".$employee['Gender']."</td>";
		
		echo "<td>".$employee['SSN']."</td>";
		
		echo "<td>".$employee['DOB']."</td>";
		
		echo "<td>".$employee['Address']."</td>";
		
		echo "<td>".$employee['Ethnicity']."</td>";
		
		echo "<td>".$employee['Phone']."</td>";
		
		echo "<td>".$employee['EmergCont']."</td>";
		
		echo "<td>".$employee['Email']."</td>";
		
		echo "<td>".$employee['HiredDate']."</td>";
		
		echo "<td>".$employee['Position']."</td>";
		
		echo "<td>".$employee['SupervName']."</td>";
		
		echo "<td>".$employee['JobType']."</td>";
		
		
		echo "</tr>";
		
	   	
	}
	?>
	
	</body>
	
  </div>

<!-- end body  -->

</div>
</body>
</html>