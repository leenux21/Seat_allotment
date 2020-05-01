function validateForm() {
    //i) All the fields except for middle name cannot be empty.
    for (i = 0; i < document.forms[0].elements.length - 1; i++) {
        if (document.forms[0].elements[i].value == "") {
            alert(document.forms[0].elements[i].name);
            return false;
        }

    }
    //ii) Roll no. will be consisting of digits only
    var x = document.forms[0]["rollNo"].value;
    var numbers = /^[0-9]+$/;
    if (!x.match(numbers)) {
        alert('Must be a digit');
        return false;
    }

    //iii) First name, middle name (if present), last name will be consisting of alphabets only.
    var letters = /^[A-Za-z]+$/;
    for (i = 1; i < 3; i++) {
        if (!document.forms[0].elements[i].value.match(letters)) {
            if (document.forms[0].elements[2].value == "") {
                continue;
            }
            alert('First Name,Middle Name,Last Name must be alphabet');
            return false;
        }
    }

    //iv) Password length will be 6 to 14, containing alphabets, digits and special characters @, $, #, _ and must contain at least one alphabet, at least one digit and at least one of the special characters
    letters = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[A-Za-z]).{6,14}$/;
    var pass = document.forms[0]["password"].value;
    if (!pass.match(letters)) {
        alert('Password length will be 6 to 14, containing alphabets, digits and special characters @, #, _ and must contain at least one alphabet, at least one digit and at least one of the special characters');
        return false;
    }

    //vi) Mobile number will be 10 digits not starting with zero.
    var mobile = document.forms[0]["mobileNo"].value;
    mob_length = mobile.length;
    if (mobile[0] != 0 && mob_length == 10) {
        return true;
    }
    else {
        alert("Mobile number must be of 10 digits and Not start with 0");
    }

    //vii) Email must be in a valid email format
    var email = document.forms[0]["email"].value;
    var patt = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (patt.test(email)) {
        return true;
    }
    else {
        alert("You have entered an invalid email address!");
    }

    //viii) Marks obtained will consist of optional sign (+/-) and an integer.
    var marks = document.forms[0]["marks"].value;
    if (marks != parseInt(marks, 10)) {
        alert("All Integers are req!");
        return false;
    }

    //v) Age must be at least 18 years
    var date1 = new Date();
    var dob = document.forms[0]["dob"].value;
    var date2 = new Date(dob);
    var y1 = date1.getFullYear(); //getting current year
    var y2 = date2.getFullYear(); //getting dob year
    var age = y1 - y2;           //calculating age 
    if (age > 18) {
        return true;
    }
    else {
        alert("Age must be greter than 18");
    }

    //ix) Grade point will consist of an integer part and a decimal part.


    //x) A student with negative marks or grade point less than 6.5 will not be allowed registration.-->

}


