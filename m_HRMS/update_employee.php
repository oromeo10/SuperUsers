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
	<h2>Update Employee</h2>
	
	<?php

		if(isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
		} else {
			header('Location: EmployeeList.php');
		}

		$sql = "SELECT * FROM employee WHERE EID = '$id'";
		$result = $HRMS->query($sql);

		if ($result->num_rows > 0) {
		     // output data of each row
		     while($row = $result->fetch_assoc()) {
				$f_name			 = $row['f_name'];
				$m_initial		 = $row['m_initial'];
				$l_name			 = $row['l_name'];
				$E_ssn			 = $row['E_ssn'];
				$E_phone		 = $row['E_phone'];
				$E_city			 = $row['E_city'];
				$E_street		 = $row['E_street'];
				$E_state		 = $row['E_state'];
				$E_email		 = $row['E_email'];
				$Date_of_hire	 = $row['Date_of_hire'];
				$dbirth			 = $row['dbirth'];
				$gender			 = $row['gender'];
				$dep_contact	 = $row['dep_contact'];
				$disability		 = $row['disability'];
				$ethnicity		 = $row['ethnicity'];
		     }
		} else {
		     echo "0 results";
		}







		// Update Employee
		if(empty($_POST) === false) {




			if(isset($_POST['f_name'], $_POST['l_name'], $_POST['E_ssn'], $_POST['E_phone'], $_POST['E_city'], $_POST['E_street'], $_POST['E_state'], $_POST['E_email'], $_POST['Date_of_hire'], $_POST['dbirth'], $_POST['gender'], $_POST['dep_contact'])) {


				$fields = array(
					'f_name'		=> $_POST['f_name'],
					'l_name'		=> $_POST['l_name'],
					'E_ssn'			=> $_POST['E_ssn'],
					'E_phone'		=> $_POST['E_phone'],
					'E_city'		=> $_POST['E_city'],
					'E_street'		=> $_POST['E_street'],
					'E_state'		=> $_POST['E_state'],
					'E_email'		=> $_POST['E_email'],
					'Date_of_hire'	=> $_POST['Date_of_hire'],
					'dbirth'		=> $_POST['dbirth'],
					'gender'		=> $_POST['gender'],
					'dep_contact'	=> $_POST['dep_contact']
				);

				foreach ($fields as $field => $data) {
					if(empty($data)) {
						//$errors[] = "The " . $field . " is required";
						$errors[] = "Please fill-up the form correctly.";
						break 1;
					}
				}


				if(empty($errors) === true) {
					if(!filter_var($_POST['E_email'], FILTER_VALIDATE_EMAIL)) {
						$errors[] = "Oops! Invalid E-mail!";
					}
				}

				if(empty($errors) === true) {



					// Update Table Row

					// $sql = "UPDATE employee SET f_name = '$_POST[f_name]', E_email = '$_POST[E_email]' WHERE EID = '$id'";

					$sql = "UPDATE employee SET f_name = '$_POST[f_name]', m_initial = '$_POST[m_initial]', l_name = '$_POST[l_name]', E_ssn = '$_POST[E_ssn]', E_phone = '$_POST[E_phone]', E_city = '$_POST[E_city]', E_street = '$_POST[E_street]', E_state = '$_POST[E_state]', E_email = '$_POST[E_email]', Date_of_hire = '$_POST[Date_of_hire]', dbirth = '$_POST[dbirth]', gender = '$_POST[gender]', dep_contact = '$_POST[dep_contact]', disability = '$_POST[disability]', ethnicity = '$_POST[ethnicity]'  WHERE EID = '$id'";

					if ($HRMS->query($sql) === TRUE) {
					    header('Location: emp_updated.php');
					} else {
					    echo "Error updating record: " . $HRMS->error;
					}

					$HRMS->close();


				} else {
					?>

						<ul><li><?php echo implode("</li><li>", $errors) ?></li></ul>

					<?php
				}


			}


		}






	?>

	

	<form action="" method="post">
		<div class="field_group">
			<label for="f_name">f_name</label>
			<input type="text" name="f_name" id="f_name" value="<?php echo $f_name ?>">
		</div>
		<div class="field_group">
			<label for="m_initial">m_initial</label>
			<input type="text" name="m_initial" id="m_initial" value="<?php echo $m_initial ?>">
		</div>
		<div class="field_group">
			<label for="l_name">l_name</label>
			<input type="text" name="l_name" id="l_name" value="<?php echo $l_name ?>">
		</div>
		<div class="field_group">
			<label for="E_ssn">E_ssn</label>
			<input type="text" name="E_ssn" id="E_ssn" value="<?php echo $E_ssn ?>">
		</div>
		<div class="field_group">
			<label for="E_phone">E_phone</label>
			<input type="text" name="E_phone" id="E_phone" value="<?php echo $E_phone ?>">
		</div>
		<div class="field_group">
			<label for="E_city">E_city</label>
			<input type="text" name="E_city" id="E_city" value="<?php echo $E_city ?>">
		</div>
		<div class="field_group">
			<label for="E_street">E_street</label>
			<input type="text" name="E_street" id="E_street" value="<?php echo $E_street ?>">
		</div>
		<div class="field_group">
			<label for="E_state">E_state</label>
			<input type="text" name="E_state" id="E_state" value="<?php echo $E_state ?>">
		</div>
		<div class="field_group">
			<label for="E_email">E_email</label>
			<input type="text" name="E_email" id="E_email" value="<?php echo $E_email ?>">
		</div>
		<div class="field_group">
			<label for="Date_of_hire">Date_of_hire</label>
			<input type="text" name="Date_of_hire" id="Date_of_hire" value="<?php echo $Date_of_hire ?>">
		</div>
		<div class="field_group">
			<label for="dbirth">dbirth</label>
			<input type="text" name="dbirth" id="dbirth" value="<?php echo $dbirth ?>">
		</div>
		<div class="field_group">
			<label for="gender">gender</label>
			<input type="text" name="gender" id="gender" value="<?php echo $gender ?>">
		</div>
		<div class="field_group">
			<label for="dep_contact">dep_contact</label>
			<input type="text" name="dep_contact" id="dep_contact" value="<?php echo $dep_contact ?>">
		</div>
		<div class="field_group">
			<label for="disability">disability</label>
			<input type="text" name="disability" id="disability" value="<?php echo $disability ?>">
		</div>
		<div class="field_group">
			<label for="ethnicity">ethnicity</label>
			<input type="text" name="ethnicity" id="ethnicity" value="<?php echo $ethnicity ?>">
		</div>
		<div class="field_group">
			<input type="hidden" name="id" value="<?php echo $id ?>">
		</div>
		<div class="field_group">
			<input type="submit" value="Update">
		</div>
	</form>

	</body>
	
  </div>

<!-- end body  -->

</div>
</body>
</html>