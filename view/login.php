<?php
include('../control/login_validation.php');

if(isset($_SESSION['username'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LOG IN</title>
</head>
<!-- <script src="../js/loginjs.js"></script>
  <p id="mytext"></p>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
<h6 id="Header"><?php include '../header/header.php';?></h6> -->


<div class="topnav">

<a href="../view/registration.php">Registration</a>

<a href="../control/logoutcheck.php">Logout</a>

<a href="../view/search.php">Search</a>



</div>

<body>
<script src="../Js Validation/loginValidation.js"></script>

<h1>Login</h1>
<form action="" method='post' onsubmit="return validateForm1()">

 <Label>UserName:</label><br><?php echo $usernameerror; ?> 
 <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" placeholder="Enter your username!"><br><br>

  <Label>Password:</label><br><?php echo $passworderror; ?> 
  <h4 id="jspassworderror"></h4>
  <input type="password" id="password" name="password"placeholder="Enter your password!"  ><br><br>


<input name="submit" type="submit" value="Login"><br>
<input name="reset" type="reset" value="reset"><br>

</form>
<br>
</body>
</html>