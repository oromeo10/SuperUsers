<!DOCTYPE html>
<html>
<body>

<?php

?>

<link rel="stylesheet" href="style.css" type="text/css">

<!-- logo -->
<br> 
<img id= "logo" src="logo.png" width="240" height="100" title="Logo of a company" alt="Logo of a company" />
</br> 
<!-- logo ends here -->
<div class="main">
<!-- body of this page starts here -->
<HR WIDTH="100%" COLOR="#6699FF" SIZE="30">
<HR WIDTH="100%" SIZE="3"> 
<h3>Add New Employee</h3>

<br>
<form id="input">
  First name:
  <input type="text" name="firstname" placeholder="First Name" value="firstname"> 
  Middle Initial:
  <input type="text" name="middlename" placeholder="Middle Initial" value="minit">
  Last name:
  <input type="text" name="lastname" placeholder="Last Name" value="lastname">
  <br>
  <br>

  Gender:
  <input type="radio" name="gender" value="M" value="male"> MALE
  <input type="radio" name="gender" value="F" value="female"> FEMALE

  <br><br>
  Disability:
  <input type="radio" name="YesNo" value="Y" value="yes"> YES
  <input type="radio" name="YesNo" value="N" value="no"> NO

  <br><br>
  SSN:
  <input type="text" name="ssn" placeholder="000000000" value="ssn">
  Date of Birth:
  <input type="text" name="DateOfBirth" placeholder="YYYY/MM/DD" value="dateofbirth">
  <br> <br>
  Address:
  <input type="text" name="Street" placeholder="Street" value="street">
  &emsp; 
  <input type="text" name="City" placeholder="City" value="city">
  &emsp; 
  <input type="text" name="State" placeholder="State" value="state">
  <input type="text" name="ZipCode" placeholder="Zip Code" value="zipcode">
  <br><br>
  Ethnicity:
  <select>
    <option>Select</option>
    <option>Mixed Race</option>
    <option>Black or African American</option>
    <option>White</option>
    <option>Asian</option>
    <option>Hispanic</option>
    <option>Other</option>
  </select>

  Phone Number:
  <input type="text" name="PhoneNumber" placeholder="0000000000" value="phonenumber">
  Emergency Contact:
  <input type="text" name="EmergencyContact" placeholder="0000000000" value="emcontactnumber">
  <br><br>
  Email:
  <input type="text" name="email" placeholder="example@something.com" value="email">
  Hired date:
  <input type="text" name="HiredDate" placeholder="YYYY-MM-DD" value="hireddate">
  Position:
  <select>
    <option>Select</option>
    <option>Cashier</option>
    <option>Manager</option>
    <option>Security Oficer</option>
    <option>Greeter</option>
    <option>Customer Service Representative</option>
    <option>Cashier Assistant</option>
    <option>Intern</option>
    <option>Assistant Manager</option>
  
  </select>
  <br><br>
  Supervisor Name:
  <input type="text" name="SupevisorName" placeholder="First and last" value="supname">
  Department Name:
  <select>
    <option>Select</option>
    <option>Customer Service</option>
    <option>Finance</option>
    <option>Pharmacy</option>
    <option>Bakery</option>
    <option>Meat</option>
    <option>Seafood</option>
    <option>IT</option>
    <option>HR</option>
    <option>Accounting</option>
    <option>Security</option>
    <option>Marketing</option>
    <option>Public Relations</option>
  </select>
Job Type:
  <select>
    <option>Select</option>
    <option>Part Time</option>
    <option>Full Time</option>
    <option>Allowed Overtime</option>
  </select>
<!-- submit emplyee information -->
<br><br>
    <input type="button" name="AddEmployee" value="Add Employee" onclick="window.location.href='Home.php'">
   
<br><br>
</form>

</div>
<!-- body ends here -->
<footer>
  copyright reserved &#169;
</footer>
</body>
</html>
