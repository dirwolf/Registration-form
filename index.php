<?php
if(isset($_POST['Name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($server, $username, $password,'idea');
    if(!$conn){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
     echo "Success connect";
   $Name = $_POST['Name'];
   $University = $_POST['University'];
   $email = $_POST['email'];
   $Phone = $_POST['Phone'];
   $disc = $_POST['disc'];


    $sql = "INSERT INTO `ideathon details`
    (`Name`, `University`, `email`, `Phone`, `disc`, `Date submitted`)
     VALUES ('$Name', '$University', '$email', '$Phone', '$disc' current_timestamp());";
     echo $sql;
     $rs = mysqli_query($conn, $sql);
     if($conn->query($sql)== true){
        echo "Successfully Inserted";
        header("Location: x.html");
     }
      echo "error: $sql <br> $conn->error";
     $conn->close();
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Ideathon form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel = "stylesheet" href = "style.css">
 </head>
<body>
    <IMG class ="bg" SRC = "gal2.jpg" alt ="Galgotias">
    <div class = "container">
        <h1>Welcome to Galgotias University Ideathon :) </h3>
        <br>
        <p>Enter your details and submit this form to confirm your participation</p>
        <p class ="submitmsg">Thanks! for submitting your form, we welcome you to our ideathon !</p>
        <form action="index.php" method = "POST">
            <input type = "text" name = "name" id ="name" placeholder = "Enter your name">
            <input type = "text" name = "University" id ="University" placeholder = "Enter your University">
            <input type = "email" name = "email" id ="email" placeholder = "Enter your email">
            <input type = "phone" name = "phone" id ="phone" placeholder = "Enter your phone no.">
            <textarea name = "disc" id = "disc" cols ="30" rows ="10" placeholder = "Enter any other information">
            </textarea>
            <button class  ="btn">Submit</button>
            <!-- <button class  ="btn">Reset</button> -->
        </form>
    </div>
    <script src = "index.js"></script>
</body>

</html>