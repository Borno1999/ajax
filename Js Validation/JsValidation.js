function validateForm() {

  var fname = document.getElementById("fname");
  var fnamefilter = /^([a-zA-Z-' ])+$/;
  var lname = document.getElementById("lname");
  var lnamefilter = /^([a-zA-Z-' ])+$/;
  var gender = document.getElementsByName("gender");
  var DOB = document.getElementById("DOB").value;
  var religion = document.getElementsByName("religion");
  var email = document.getElementById("email");
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;


  document.getElementById("Button").onclick;


  if (!fnamefilter.test(fname.value)) {
    valid = 0;
    document.getElementById("jsfnameerror").innerHTML = "First Name must contain only letter";
    alert("First Name must contain only letter");
    return false;
  }

  if (!lnamefilter.test(lname.value)) {
    valid = 0;
    document.getElementById("jslnameerror").innerHTML = "Last Name must contain only letter";
    alert("Last Name must contain only letter");

    return false;
  }

  if (gender[0].checked == true) {
    document.getElementById("jsgendererror").innerHTML = "Male selected";
  } else if (gender[1].checked == true) {
    document.getElementById("jsgendererror").innerHTML = "Female selected";
  } else {
    // no checked
    document.getElementById("jsgendererror").innerHTML = "Gender must be selected";

    alert("Gender must be selected");

    return false;
  }


  if (DOB == "") {
    document.getElementById("jsDOBerror").innerHTML = "Date must be selected";
    alert("Date of birth must be selected");
    return false;
  }



  if (religion[0].checked == true) {
    document.getElementById("jsreligionrerror").innerHTML = "islam selected";
  } else if (religion[1].checked == true) {
    document.getElementById("jsreligionerror").innerHTML = "Christianity selected";
  } else {
    // no checked
    document.getElementById("jsreligionerror").innerHTML = "Religion must be selected";
    alert("Religion must be selected");
    return false;
  }




  if (!filter.test(email.value)) {
    valid = 0;
    document.getElementById("jsemailerror").innerHTML = "Invalid Email address";
    alert("Email  must be filled out");
    return false;
  }


  if (username == "") {
    document.getElementById("jsusernameerror").innerHTML = "User Name must be filled out";
    alert("User Name must be filled out");
    return false;
  }





  if (password.length < 6) {
    document.getElementById("jspassworderror").innerHTML = "Password must be filled out and more than 5 input";
    // alert("Password must be filled out");
    return false;
  }


}