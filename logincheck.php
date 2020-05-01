
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="StyleSheetPage2.css">
    <link rel="stylesheet" href="StyleForm.css">
</head>
<?php
    $conn = mysqli_connect('localhost','souvik','test1234','jeca sign up');

    $regNO = $_POST['regNO'];
    $password = $_POST['password'];

    $query = "select id from signup where $regNO = signup.id AND $password = signup.password";
    $result = mysqli_query($conn,$query);
    if($result->num_rows> 0)
    {
        include('Application.php');   
    }
    else
        echo '<body>
        <nav id="navbar">
        <ul>
            <li><a href="firstpage.html">HOME</a></li>
            <li><a href="jeca.html">JECA</a></li>
            
        </ul>
      </nav>
        
        <div style="text-align:center;"> <h2>Ooops!! No Records Found.</h2>
        <a href="jeca.html" style="padding:20px;">BACK</a>
        <footer>
        © Copyright 2011-2020 www.wbjeeb.nic.in. All rights reserved. Developed by Souvik Sarkar & Debleena Biswas.
    </footer>
 </body>
</html>' ;
?>