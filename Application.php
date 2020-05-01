<?php
  session_start();
  $_SESSION['regNO'] = $regNO;
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application</title>
    <link rel="stylesheet" href="StyleSheetPage2.css" />
    <link rel="stylesheet" href="StyleForm.css" />
    <script src=checkBox.js></script>
  </head>
  <body>
    <nav id="navbar">
      <ul>
        <li><a href="firstpage.html">HOME</a></li>
        <li><a href="jeca.html">JECA</a></li>
      </ul>
    </nav>
    <div id="leftsidesection">
      <img src="./wbjee.png" alt="Wbjee logo.png" />
      <p><strong>WEST BENGAL JOINT ENTRANCE EXAMINATIONS BOARD</strong></p>
      <p>
        Address : 94/A Anandamath Ichapure<br />
        North 24 Parganas
      </p>
      <p>Contact no : 9804191249</p>
      <p>email us: wbjeeb@gmail.com</p>
    </div>
    <div id="notice">
      <h3>NOTICE</h3>
      <ul>
        <li><a href="notice1.pdf">Results Declared</a></li>
        <hr />
        <li><a href="collegeList.php">Seat Arrangement</a></li>
        <hr />
        <li><a href="notice3.pdf">Exam date reveals</a></li>
        <hr />
        <li><a href="seemore.html">see more..</a></li>
      </ul>
    </div>
    
    <h3 id="infohead">Personal Information</h3>
    <div id="info">
    
  
      <form
        name="application"
        action="Education_form.php"
        onsubmit="return validateForm()"
        method="POST"  enctype="multipart/form-data"
      >

      <div id="regno">
      <?php
        echo 'Registration No - '.$regNO.'<br>';
      ?>
    </div>
    <br>

        <label class="required">First Name:</label>
        <input type="text" name="firstname" required />
        <label class="required">Last Name:</label>
        <input type="text" name="lastname" required />
        <br />
        <br />
        <label>Father's Name</label>
        <input type="text" name="fathersname" />
        <label>Mother's Name</label>
        <input type="text" name="mothersname" />
        <br />
        <br />
        <label class="required">Date of Birth</label>
        <input type="date" name="dob" required />
        <br />
        <br />
        <label class="required">Mobile Number</label>
        <input type="text" name="phno" required />

        <label class="required">Email id:</label>
        <input type="email" name="emailid" required />
        <br />
        <br />
        <label class="required">Sex:</label>
        Female
        <input type="radio" name="sex" value="female" />
        Male
        <input type="radio" name="sex" value="male" />
        Others
        <input type="radio" name="sex" value="others" />
        <br />
        <br />
        <label class="required">Catagory:</label>
        SC<input type="radio" name="catagory" value="sc" /> 
        ST<input type="radio"
          name="catagory"
          value="st"
        />
        OBC<input type="radio" name="catagory" value="obc" /> 
        GEN<input
          type="radio"
          name="catagory"
          value="gen"
        />
        <br />
        <br />
        <hr />
        <br />
        <br />
        <h4 class="required">Current Address:</h4>
        <br /><br />
        <label class="required">House No.:</label>
        <input type="text" name="hno" id="hno" />
        <label class="required">Road Name</label>
        <input type="text" name="road" id="road"/>
        <br />
        <br />
        <label class="required">City:</label>
        <input type="text" name="city" id="city" />
        <label class="required">Pin code:</label>
        <input type="text" name="pin" id="pin" />
        <br />
        <br />
        <label class="required">State:</label>
        <input type="text" name="state" id="state" />
        <label class="required">Country:</label>
        <input type="text" name="country" id="country" />
        <br />
        <br />
        <label class="required">Phone Number:</label>
        <input type="text" name="ph_number" id="ph_number" />
        <br />
        <br />
        <hr />
        <br />
        <br />
        <h4 class="required">Permanent Address:</h4>
        <br /><br />
        (check the box if same as current address)
        <input type="checkbox"  name="permanentAddress" id="permanentAddress" onclick="filladdress()"/><br /><br />
        <label class="required">House No.:</label>
        <input type="text" name="p_hno" id ="p_hno"/>
        <label class="required">Road Name</label>
        <input type="text" name="p_road"  id="p_road"/>
        <br />
        <br />
        <label class="required">City:</label>
        <input type="text" name="p_city" id="p_city" />
        <label class="required">Pin code:</label>
        <input type="text" name="p_pin" id="p_pin" />
        <br />
        <br />
        <label class="required">State:</label>
        <input type="text" name="p_state" id="p_state" />
        <label class="required">Country:</label>
        <input type="text" name="p_country" id="p_country" />
        <br />
        <br />
        <label class="required">Phone Number:</label>
        <input type="text" name="p_ph_number" id="p_ph_number"  />
      
    </div>
    
    <button type="submit" value="Save name" name="but_upload">Submit and Next</button>
</form>

    <footer>
      © Copyright 2011-2020 www.wbjeeb.nic.in. All rights reserved. Developed by
      Souvik Sarkar & Debleena Biswas.
    </footer>
    <script src="ApplicationFormCheck.js">
     
    </script>
  </body>
</html>
