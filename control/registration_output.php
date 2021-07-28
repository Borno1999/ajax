<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location:../view/registration.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
</head>

<div class="topnav">

<a href="../View/registration.php">Registration</a>

<a href="../view/login.php">Login</a>

<a href="../control/logoutcheck.php">Logout</a>

</div>
<body>
<h2>Successfully Registered Information</h2>


<?php
include('db.php');

$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->showall($conn,"users"); 
 
echo "<table border='1'>
<tr>
<th>id</th>
<th>fname</th>
<th>lname</th> 
<th>gender</th> 
<th>DOB</th>
<th>religion</th>
<th>email</th>
<th>username</th>
<th>password</th>
</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['religion'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";

    
    echo "</tr>";
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } 
?>  
</body>
</html>