<!DOCTYPE html>
<html>
    <head>
    
</head>
<body>
<div class="topnav">
<a href="../View/home.php">Home</a>
<a href="../view/login.php">Login</a>
<a href="../control/logoutcheck.php">Logout</a>
</div>
 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
  else
  {
     document.getElementById("mytext").innerHTML = this.status;
  }
  };
  xhttp.open("POST", "/Mycode/Ajex/control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
}
</script>
</head>
<br>
<label>Find details of Registration table by ID :</label><br><br>
 ID:<input type="text" id="uname" onkeyup="showmyuser()" >
<p id="mytext"></p>
</body>
</html>