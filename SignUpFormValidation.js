function validateForm() {
    var x = document.forms["signup"]["firstName"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    var x = document.forms["signup"]["lastName"].value
    if(x == "")
    {
        alert("Last Name must be filled out");
        return false;
    }
    var x = document.forms["signup"]["email"].value
    if(x == "")
    {
        alert("Valid email is needed");
        return false;
    }
    var x = document.forms["signup"]["password"].value
    if(x == "")
    {
        alert("Password is necessary");
        return false;
    }
    var y = document.forms["signup"]["password2"].value
    if(y != x)
    {
        alert("password did not match");
        return false;
    }

  }