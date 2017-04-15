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
  <input type="text" name="firstname" placeholder="First Name"> 
  Middle Initial:
  <input type="text" name="middlename" placeholder="Middle Initial">
  Last name:
  <input type="text" name="lastname" placeholder="Last Name">
  <br>
  <br>

  Gender:
  <input type="radio" name="gender" value="male" > Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other

  
  <br><br>
  SSN:
  <input type="text" name="ssn" placeholder="000000000">
  Date of Birth:
  <input type="text" name="DateOfBirth" placeholder="MM/DD/YYYY">
  <br> <br>
  Address:
  <input type="text" name="Street" placeholder="Street">
  &emsp; 
  <input type="text" name="City" placeholder="City">
  &emsp; 
  <input type="text" name="State" placeholder="State">
  <input type="text" name="ZipCode" placeholder="Zip Code">
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
  <input type="text" name="PhoneNumber" placeholder="000-000-0000">
  Emergency Contact:
  <input type="text" name="EmergencyContact" placeholder="000-000-0000">
  <br><br>
  Email:
  <input type="text" name="email" placeholder="example@something.com">
  Hired date:
  <input type="text" name="HiredDate" placeholder="MM/DD/YYYY">
  Position:
  <input type="text" name="HiredDate" placeholder="Position Title">
  <br><br>
  Supervisor Name:
  <input type="text" name="SupevisorName" placeholder="First and last">
  Department Name:
  <select>
    <option>Select</option>
    <option>Cashier</option>
    <option>Manager</option>
    <option>Finance</option>
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

    <input type="submit" name="AddEmployee" value="Add Employee">


<br><br>
</form>

</div>
<!-- body ends here -->
<footer>
  copyright reserved &#169;
</footer>
</body>
</html>