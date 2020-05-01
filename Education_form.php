<?php
  session_start();
   // $_SESSION['regNO'] = $regNO;
    $id= ($_SESSION['regNO']);
    $conn = mysqli_connect('localhost','souvik','test1234','jeca sign up'); 
    /*personal info */
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $fathersname = $_POST['fathersname'];
    $mothersname = $_POST['mothersname'];
    $dob = $_POST['dob'];
    $phno = $_POST['phno'];
    $email = $_POST['emailid']; 
    $sex = $_POST['sex'];/*sex */
    $catagory = $_POST['catagory'];/*category */

    /*address */
    $hno = $_POST['hno'];
    $road = $_POST['road'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $ph_number = $_POST['ph_number'];

    /*permanent address */
    $p_hno = $_POST['p_hno'];
    $p_road = $_POST['p_road'];
    $p_city = $_POST['p_city'];
    $p_pin = $_POST['p_pin'];
    $p_state = $_POST['p_state'];
    $p_country = $_POST['p_country'];
    $p_ph_number = $_POST['p_ph_number'];

    $query = "insert into personal_info(id,first_name,last_name,fathers_name,mothers_name,dob,mobile_no,email_id,sex,catagory,house_no,road,city,
    pincode,state,country,phone,p_house_no,p_road,p_city,p_pincode,p_state,p_country,p_phone) values($id,'$fn','$ln','$fathersname',
    '$mothersname','$dob',$phno,'$email','$sex','$catagory','$hno','$road','$city',$pin,'$state','$country',$ph_number,'$p_hno','$p_road',
    '$p_city',$p_pin,'$p_state','$p_country',$p_ph_number)";

    mysqli_query($conn,$query);
    

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application</title>
    <link rel="stylesheet" href="StyleSheetPage2.css" />
    <link rel="stylesheet" href="StyleForm.css" />
    <style>
      table{

      }
    </style>
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
    
  
    
    
  
      <form
        name="application"
        action="document_form.php"
        method="POST"
      >
 
     


    <h3 id="infohead">Educational Information</h3>
    <div id="info">
    <div id="regno">
      <?php
        echo 'Registration No - '.$id.'<br>';
      ?>
    </div><br>
      <table border="1">
        <tr>
          <th>Course</th>
          <th>Board/University</th>
          <th>Name of the intitution</th>
          <th>Marks(%)</th>
          <th>Year of passing</th>
        </tr>
        <tr>
          <td>10th</td>
          <td><input type="text" name="board1" /></td>
          <td><input type="text" name="institute1" /></td>
          <td><input type="text" name="marks1" /></td>
          <td><input type="text" name="year_of_passing1" /></td>
        </tr>
        <tr>
          <td>(10+2)</td>
          <td><input type="text" name="board2" /></td>
          <td><input type="text" name="institute2" /></td>
          <td><input type="text" name="marks2" /></td>
          <td><input type="text" name="year_of_passing2" /></td>
        </tr>
        <tr>
          <td>(10+2+3)</td>
          <td><input type="text" name="board3" /></td>
          <td><input type="text" name="institute3" /></td>
          <td><input type="text" name="marks3" /></td>
          <td><input type="text" name="year_of_passing3" /></td>
        </tr>
      </table>
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
