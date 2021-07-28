<?php
include('db.php');

$user = $_POST['uname'];

if($user=="")
{
    echo "Please give input to find the data!<br><br>";
}
if($user != "")
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $MyQuery=$connection->GetUserByUname($conobj,"users",$user );


if ($MyQuery->num_rows > 0) {
    
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<table border=1>".
      
      "<tr>".
      
      "<th>"."Id"."</th> ".
      "<th>"."First Name"."</th> ".
      "<th>"."Last Name"."</th> ".
      "<th>"."Gender"."</th> ".
      "<th>"."DOB"."</th> ".
      "<th>"."religion"."</th> ".
      "<th>"."Email"."</th> ".
      "<th>"."username"."</th> ".
      "<th>"."Password"."</th> ".
      

    "</tr>".
  
    "<tr>".
    "<td>".$row["id"]."</td>".
      "<td>".$row["fname"]."</td>".
      "<td>".$row["lname"]."</td>".
      "<td>".$row["gender"]."</td>".
      "<td>".$row["DOB"]."</td>".
      "<td>".$row["religion"]."</td>".
      "<td>".$row["email"]."</td>".
      "<td>".$row["username"]."</td>".
      "<td>".$row["password"]."</td>".      
    "</tr>".
  
  "</table>";
    }
    echo "</table>";
  } 
else {
   echo "Searching
    ";
  }
}
?>
<!DOCTYPE html>
<html>

</html>