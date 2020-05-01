<?php
session_start();
//$_SESSION['regNO'] = $regNO;
$id= ($_SESSION['regNO']);
  $conn = mysqli_connect('localhost','souvik','test1234','jeca sign up'); 
/*Educational info */
    $board1 =$_POST['board1'];
    $institute1 =$_POST['institute1'];
    $marks1 =$_POST['marks1'];
    $year_of_passing1 =$_POST['year_of_passing1'];

    $board2 =$_POST['board2'];
    $institute2 =$_POST['institute2'];
    $marks2 =$_POST['marks2'];
    $year_of_passing2 =$_POST['year_of_passing2'];

    $board3 =$_POST['board3'];
    $institute3 =$_POST['institute3'];
    $marks3 =$_POST['marks3'];
    $year_of_passing3 =$_POST['year_of_passing3'];

    $query = "insert into educational_info(id,board1,institute1,marks1,year_of_passing1,board2,institute2,marks2,year_of_passing2,
    board3,institute3,marks3,year_of_passing3) values ($id,'$board1','$institute1',$marks1,$year_of_passing1,'$board2','$institute2',$marks2,$year_of_passing2,'$board3','$institute3',$marks3,$year_of_passing3)";

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
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        method="POST"
      >


      <h3 id="infohead">Document Upload</h3>
    <div id="info">
    <div id="regno">
      <?php
        echo 'Registration No - '.$id.'<br>';
      ?>
    </div><br>
      <label class="required">Photo</label>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="file" name="image" />
      <button type="submit" name="submit1">Upload</button>
    </form>
   
      <br />
      <br />
      <label class="required">Caste Certificate:</label>
      <input type="file" name="caste_certificate" />
      <button type="submit" name="submit2">Upload</button>
      <br />
      <br />
      <label class="required">Address Proof</label>
      <input type="file" name="domicile_certificate" />
      <button type="submit" name="submit3">Upload</button>
    </div>
    
    <form action="college_choose_form.php">
        <button type="submit" value="Save name" name="but_upload">Submit and Next</button>
    </form>
    
</form>
    

    <footer>
      © Copyright 2011-2020 www.wbjeeb.nic.in. All rights reserved. Developed by
      Souvik Sarkar & Debleena Biswas.
    </footer>
    <script src="ApplicationFormCheck.js">
     
    </script>
  </body>
</html>
<?php
  $conn = mysqli_connect('localhost','souvik','test1234','jeca sign up'); 

  if(isset($_POST['submit1'])){
   
    $name = $_FILES['file']['name'];
    $target_dir = "upload/image/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
       // Insert record
       $query = "insert into image(id,image_name) values('$id','".$name."')";
       mysqli_query($conn,$query);
    
       // Upload file
       move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  
    }
   
  }
  
  if(isset($_POST['submit2'])){
   
    $name = $_FILES['file']['name'];
    $target_dir = "upload/caste_certificate/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("pdf","docx");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
       // Insert record
       $query = "insert into caste_certificate(id,caste_certificate_name) values('id','".$name."')";
       mysqli_query($conn,$query);
    
       // Upload file
       move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  
    }
   
  }
  
  if(isset($_POST['submit3'])){
   
    $name = $_FILES['file']['name'];
    $target_dir = "upload/domicile_certificate/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("pdf","docx");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
       // Insert record
       $query = "insert into domicile_certificate(id,domicile_certificate_name) values('id','".$name."')";
       mysqli_query($conn,$query);
    
       // Upload file
       move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  
    }
   
  }
?>

