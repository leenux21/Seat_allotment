<!--18. Create a web application to register 5th semester students for minor projects. Registration information should include roll no, name, email id, description of project, and choice of mentor. Apply proper client side validation rules before submitting the data. Add functionality to query how many students has shown interest to work under a particular mentor.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Registration Form</title>
    <style>
        .container,.container2{
            max-width: 300px;
            margin-left: 500px;
            padding-left: 100px;
            background: lavender;
            padding: 50px;
            border-radius: 10px;
        }

        input {
            display: block;
            margin-bottom: 10px;
        }

        button {
            margin-top: 20px;
        }

        #teacher {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;"> Minor projects Registration Form for 5th semester students </h1>
    <div class="container">
        <form name="regForm" action="action.php" onsubmit="return validateForm()" method = "POST">
            <label for="rollNo">Roll No :</label>
            <input type="text" name="rollNo" id="rollNo" placeholder="Enter roll">
            <label for="name">Name :</label>
            <input type="text " name="name" id="name" placeholder="enter your name">
            <label for="emailId">Email Id :</label>
            <input type="email" name="emailId" id="emailId" placeholder="Enter email">
            <label for="projects">Choose a project:</label>
            <select id="projects" name="projects">
                <option value="Soft Computing">Soft Computing</option>
                <option value="Image Processing">Image Processing</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Advance Java">Advance Java</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
            </select>
            <label for="mentor">Choose a Mentor:</label>
            <select id="mentor" name="mentor">
                <option value="Suman Ghosh">Suman Ghosh</option>
                <option value="Sandipan Ganguly">Sandipan Ganguly</option>
                <option value="Subhra Pramanik">Subhra Pramanik</option>
                <option value="Souvik Basu">Souvik Basu</option>
                <option value="Palash Ghosh">Palash Ghosh</option>
                <option value="Jyotirmoy Ghosh">Jyotirmoy Ghosh</option>
            </select>
            <button type="submit" name="submit1">Submit Form</button>
        </form>
    </div>
    <h1 style="text-align: center;">See how many students has shown interest to work under a particular mentor :</h1>
    <div class="container2">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
        <label for="mentor">Choose a Mentor:</label>
            <select id="mentor" name="mentor">
                <option value="Suman Ghosh">Suman Ghosh</option>
                <option value="Sandipan Ganguly">Sandipan Ganguly</option>
                <option value="Subhra Pramanik">Subhra Pramanik</option>
                <option value="Souvik Basu">Souvik Basu</option>
                <option value="Palash Ghosh">Palash Ghosh</option>
                <option value="Jyotirmoy Ghosh">Jyotirmoy Ghosh</option>
            </select>
            <button type="submit" name="submit2">Click here to check</button>
        </form>
    </div>
    <?php
    $conn = mysqli_connect('localhost','souvik','test1234','registration');
     
    if(isset($_POST['submit2']))
    {
        $mentor = $_POST['mentor'];
        $query = "select count(roll) as total from registration_form where registration_form.mentor = '$mentor' ";
        $count = mysqli_query($conn,$query);
        $row = $count->fetch_assoc();
        echo '
        <h1 style="text-align:center;">Number of Students has shown interest to work under ' . $mentor . ' is ' . $row["total"] . '</h1>';
    }
       
    ?>
    

</body>

</html>