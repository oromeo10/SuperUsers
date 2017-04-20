<?php


?>
I can't finish this page without looking at the tables. will finish it later. 
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
    <h1>Payroll System</h1>

<!-- starts -->
   <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="rform"></div>    
      Employee ID:
      <input type="text" name="EID" placeholder="Employee ID"> 
      <br>

   <!-- please name hourly rate as HourlyRate in the database, I will have functions that need to get the value from the databse for hourly rate :)  -->

      Hourly Rate: &emsp; 
      <input type="text" id="HourlyRate" placeholder="00.00">
      <br>
      Hours Worked: &emsp; &emsp; 
      <input type="text" id="WorkTime" placeholder="00.00">
      <br>
      
    <input type="submit" id="salary" value="Calculate Salary" onclick="calculate()" ">

  <br>
  <br>

    </form>

    <p>The salary for <span id = "EID"> </span> is  : <br>  
    <span id = "salary"></span>  
    <!-- js to calculate salary -->
  <script>

    function calculate() {
    var myBox1 = document.getElementById('HourlyRate').value; 
    var myBox2 = document.getElementById('WorkTime').value;
    var result = document.getElementById('salary'); 
    var myResult = Mybox1 * Mybox2;
    result.innerHTML = myResult;

}
</script>





<!-- ends -->

 
  </div>

<!-- end body  -->

</div>