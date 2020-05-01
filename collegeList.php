<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college List</title>
    <link rel="stylesheet" href="collegeList.css"> 
    
</head>

<body>
    <nav id="navbar">
        <ul>
            <li><a href="firstpage.html">HOME</a></li>
            <li><a href="jeca.html">JECA</a></li>
            <li><a href="jelet.html">JELET</a></li>
            <li><a href="wbjee.html">WBJEE</a></li>
            <li><a href="jehom.html">JEHOM</a></li>
            <li><a href="pumdet.html">PUMDET</a></li>
        </ul>
    </nav>
    <div id="notice">
        <h3>NOTICE</h3>
        <ul>
            <li><a href="notice1.pdf">Results Declared</a></li><hr>
            <li><a href="notice2.pdf">Seat Arrangement</a></li><hr>
            <li><a href="notice3.pdf">Exam date reveals</a></li><hr>
            <li><a href="seemore.html">see more..</a></li>
        </ul>
    </div>
    <div id="north" class="lists">
        <h4>Colleges of North Bengal</h4>
        <table border="1">
            <tr>
                <td rowspan="2">College ID</td>
                <td rowspan="2">Name</td>  
                <td colspan="2">Number of Seat available</td>
                <td rowspan="2">Cutoff</td>
                <td rowspan="2">Website</td>
                
            </tr>
            <tr>
                <td>GEN</td>
                <td>SC/ST/OBC</td>
            </tr>
        
    <?php
    $conn = mysqli_connect('localhost','souvik','test1234','jeca sign up');
    $sql = "select college_id,college_name,gen_seat_no,reserve_seat_no,cut_off,college_link from college where location='North Bengal'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["college_id"]. " - Name: " . $row["college_name"]. " " . $row["gen_seat_no"]. "<br>";
        echo '
            <tr>';
                echo '<td>'.$row["college_id"].'</td>';
                echo '<td>'.$row["college_name"].'</td>';
                echo '<td>'.$row["gen_seat_no"].'</td>';
                echo '<td>'.$row["reserve_seat_no"].'</td>';
                echo '<td>'.$row["cut_off"].'</td>';
               echo' <td>'.'<a href='.$row["college_link"].'>Click here</a></td>';
            echo'</tr>';
        

        }
    } else {
        echo "0 results";
    }
    
    ?>
    </table>
        </div>

        <div id="north" class="lists">
        <h4>Colleges of South Bengal</h4>
        <table border="1">
            <tr>
                <td rowspan="2">College ID</td>
                <td rowspan="2">Name</td>  
                <td colspan="2">Number of Seat available</td>
                <td rowspan="2">Cutoff</td>
                <td rowspan="2">Website</td>
                
            </tr>
            <tr>
                <td>GEN</td>
                <td>SC/ST/OBC</td>
            </tr>
        
    <?php
   
    $sql = "select college_id,college_name,gen_seat_no,reserve_seat_no,cut_off,college_link from college where location='South Bengal'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["college_id"]. " - Name: " . $row["college_name"]. " " . $row["gen_seat_no"]. "<br>";
        echo '
            <tr>';
                echo '<td>'.$row["college_id"].'</td>';
                echo '<td>'.$row["college_name"].'</td>';
                echo '<td>'.$row["gen_seat_no"].'</td>';
                echo '<td>'.$row["reserve_seat_no"].'</td>';
                echo '<td>'.$row["cut_off"].'</td>';
                echo' <td>'.'<a href='.$row["college_link"].'>Click here</a></td>';
            echo'</tr>';
        

        }
    } else {
        echo "0 results";
    }
    
    ?>
    </table>
        </div>
     <footer>
        © Copyright 2011-2020 www.wbjeeb.nic.in. All rights reserved. Developed by Souvik Sarkar & Debleena Biswas.
    </footer>

</body>
</html>