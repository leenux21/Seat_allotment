<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="StyleSheetPage2.css">    
</head>
<?php
$conn = mysqli_connect('localhost','souvik','test1234','jeca sign up');

$fN = $_POST['firstName'];
$lN =  $_POST['lastName'];
$email =  $_POST['email'];
$pass1 =  $_POST['password'];
$pass2 =  $_POST['password2'];

$query = "insert into signup(FirstName,LastName,Email,Password,ConfirmPassword) values ('$fN', '$lN', '$email', '$pass1', '$pass2' )";
$data = mysqli_query($conn,$query);

$sql = "SELECT id,FirstName, LastName,Email FROM signup where signup.Email='$email'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
echo '<body>
    <nav id="navbar">
        <ul>
            <li><a href="firstpage.html">HOME</a></li>
            <li><a href="jeca.html">JECA</a></li>
            
        </ul>
    </nav>
        <h1>You are successfully registered</h1>
    <div id="tab">
        <table border="1" cellspacing="0" style="text-align=center;">
        <tr>
            <td>Registration No</td>
           <td>';echo $row["id"].'</td>
        </tr>
        <tr>
              <td>Name</td>
             <td>';echo $row["FirstName"]." ".$row["LastName"].'</td>
        </tr>
        <tr>
              <td>Email</td>
             <td>';echo $row["Email"].'</td>
        </tr>
        </table>
    </div>
         <footer>
            © Copyright 2011-2020 www.wbjeeb.nic.in. All rights reserved. Developed by Souvik Sarkar & Debleena Biswas.
        </footer>
</body>
</html>';
    


?>
