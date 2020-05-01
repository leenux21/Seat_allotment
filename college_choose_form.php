<?php
session_start();
//$_SESSION['regNO'] = $regNO;
$id= ($_SESSION['regNO']);

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
    
  
    
    
  
      <form
        name="application"
        action="final.php"
        method="POST"
      >

      
      </div><br>
      <h3 id="infohead">Choose Colleges</h3>
    <div id="info">
    <div id="regno">
      <?php
        echo 'Registration No - '.$id.'<br>';
      ?>
      <label class="required">Select the Zone : </label>
      North Bengal
      <input type="checkbox" value="NB" />
      South Bengal
      <input type="checkbox" value="SB" />
      <br />
      <br />
      <label for="colleges">Choice #1:</label>
      <select id="colleges" name="colleges">
        <option value="Siliguri Intitute of Technology"
          >Siliguri Intitute of Technology</option
        >
        <option value="Institute of North Bengal"
          >Institute of North Bengal
        </option>
        <option value="University of Gourbanga">University of Gourbanga</option>
        <option value="Raiganj University">Raiganj University</option>
      </select>
    </div>


    <button type="submit" value="Save name" name="but_upload">Final Submit</button>
</form>

    <footer>
      © Copyright 2011-2020 www.wbjeeb.nic.in. All rights reserved. Developed by
      Souvik Sarkar & Debleena Biswas.
    </footer>
    <script src="ApplicationFormCheck.js">
     
    </script>
  </body>
</html>

