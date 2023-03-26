<?php
// print_r($_POST);
// if(isset($_POST['Name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "idea";
    $conn = mysqli_connect($server, $username, $password,$dbname);
    if(!$conn){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
     echo "Success connect";
   $name = $_POST['name'];
   $University = $_POST['University'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $disc = $_POST['disc'];


//    $sql = "INSERT INTO message (Name, University, email, Phone, disc, Date submitted)
//         VALUES (?, ?, ?, ?, ?)";

// $stmt = mysqli_stmt_init($conn);

// if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
//     die(mysqli_error($conn));
// }

// mysqli_stmt_bind_param($stmt, "sssiii",
//                        $name,
//                        $University,
//                        $email,
//                        $Phone,
//                        $disc);

// mysqli_stmt_execute($stmt);
    $sql = "INSERT INTO `ideathon details`
    (`Name`, `University`, `email`, `Phone`, `disc`, `Date submitted`)
     VALUES ('$name', '$University', '$email', '$phone', '$disc' ,current_timestamp());";
     echo $sql;
     $rs = mysqli_query($conn, $sql);
     if($conn->query($sql)== true){
        echo "Successfully Inserted";
        header("Location: x.html");
     }
      echo "error: $sql <br> $conn->error";
      echo "Record saved.";
     $conn->close();
     
    //  mysqli_close($conn);
    
    // }
?> 
