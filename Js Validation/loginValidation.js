function validateForm1() {
  var username = document.getElementById("username");
  var pattern = /^[a-zA-Z]+$/;
  var password = document.getElementById("password").value;



  if (!pattern.test(username.value)) {
    valid = 0;
    document.getElementById("jsusernameerror").innerHTML = "username must be filled out";
    alert("username must be filled out");
    return false;

  }


  if (password.length < 6) {
    document.getElementById("jspassworderror").innerHTML = "Password must be filled out and more than 5 input";
    // alert("Password must be filled out");
    return false;
  }


}