<!DOCTYPE html>
<html>
<head>
</head>

<div class="topnav">

<a href="../View/home.php">Home</a>

<a href="../view/login.php">Login</a>

<a href="../control/logoutcheck.php">Logout</a>

</div>
<body>
<script src="../Js Validation/JsValidation.js"></script>

<?php
include('../control/validation.php');

if(isset($_SESSION['username'])){
header("location: ../control/registration_output.php");
}

?>

<h1 id="Title">Registration</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype = "multipart/form-data" onsubmit="return validateForm()">
  
  <fieldset>
    <legend>Baic Information</legend>
  <Label>First Name:</label><br>  
  <input type="text" id="fname" name="fname" ><?php echo $fnameError;?><h4 id="jsfnameerror"></h4><br><br>


  <Label>Last Name:</Label><br>  
  <input type="text" id="lname" name="lname" ><?php echo $lnameError;?><h4 id="jslnameerror"></h4><br><br>

  <label>Gender:</label><?php echo $genderError; ?> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
<br><br>
  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php echo $DOBError; ?> <h4 id="jsDOBerror"></h4><br><br>

<label for="religion">Religion</label><?php echo $religionError; ?><h4 id="jsreligionerror"></h4>
<input type="checkbox" name="religion" id="religion">Islam
<input type="checkbox" name="religion" id="religion">Christianity
<input type="checkbox" name="religion" id="religion">Buddhism
<input type="checkbox" name="religion" id="religion">Hinduism

</fieldset><br>
<br>
<fieldset>
<legend>Contact Information</legend>

<Label>Present Address:</Label><br>
<textarea rows="3" cols="20"></textarea>  <br> <br><br>

<Label>Permannent Address:</Label><br>
<textarea rows="3" cols="20"></textarea>  <br> <br><br>

<Label>Phone Number:</Label><br>
<input type="tel" id="phone" name="phone" ><br> <br>

  <Label>Email:</Label><br> 
  <input type="text" id="email" name="email" ><?php echo $emailError;?><h4 id="jsemailerror"></h4><br><br>
  <br><br>

  <a href="http://www.w3schools.com/" target="_blank">Personal Website Link</a>

</fieldset>
<br><br>
<fieldset>
<legend>Academic Information</legend>

  <Label>User Name:</label><br>  <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" ><?php echo $usernameError;?><br><br>

  <Label>Password:</Label><br> 
  <input type="password" id="password" name="password" ><?php echo $passwordError; ?><h4 id="jspassworderror"></h4><br><br>

</fieldset>  
  
  <br>

  <input type="submit" name="submit" id="Button" value="Submit">
  

</form> 
</body>

</html>