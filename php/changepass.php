<?php
    session_start();
    include("config.php");


    $myemail = $_SESSION['email'];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $pass = $_POST["password"];

    $sql = "UPDATE `customer` SET `password`='$pass' WHERE email = '$myemail'";

    if ($conn->query($sql) === TRUE) 
    {
        header("Location: profil.php");
    } else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
?>