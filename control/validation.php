<?php
include('db.php');

session_start(); 
$fname=$lname= $gender = $DOB = $religion =  $email = $username =  $password=  "";

$fnameError= $lnameError= $genderError= $DOBError=$religionError=  $emailError=  $usernameError=  $passwordError =    " ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){

$lname = test_input($_POST["fname"]);
$lname = test_input($_POST["lname"]);
$gender = test_input($_POST["gender"]);
$DOB  = test_input($_POST["DOB"]);
$religion = test_input($_POST["religion"]);
$email = test_input($_POST["email"]);
$username = test_input($_POST["username"]);

$password = test_input($_POST["password"]);

if ((empty($_POST['fname'])) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname']))||(empty($_POST['lname'])) ||  (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname'])) ||(empty($_POST['gender']))||(empty($_POST['DOB']))||(empty($_POST['religion'])) || (empty($_POST['email']))|| (empty($_POST['username'])) || (empty($_POST['password']))  )
 {
    $fnameError = " First Name is required!";
    $lnameError = " Last Name is required!";
    $genderError = " Gender is required";
    $DOBError = " Date of birth is required";
    $religionError = " Religionis required";
    $emailError = " Email is required"; 
    $usernameError =  " UserName is required";
    $passwordError = " Password is required";
    
   
    
} else{


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$DOB  = $_POST['DOB'];
$religion = $_POST['religion'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];





$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$fname,$lname, $gender,$DOB,$religion, $email, $username,  $password);

$_SESSION["fname"]=$fname;
$_SESSION["lname"]=$lname;
$_SESSION["gender"]=$gender;
$_SESSION["DOB"] =$DOB ;
$_SESSION["religion"]=$religion;
$_SESSION["email"]=$email;
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;

}
}

?>