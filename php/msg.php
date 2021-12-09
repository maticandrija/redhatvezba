<?php
    session_start();
    include("config.php");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $senderEmail = $_SESSION['email'];
        $receiverEmail = $_POST["to"];
        $msg = $_POST["msg"];
        $sql = "INSERT INTO conversation (senderEmail, receiverEmail, message)
        VALUES ('$senderEmail', '$receiverEmail' , '$msg')";
        if ($conn->query($sql) === TRUE)
         {
            header("Location: profil.php");
        } else
         {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
   
    ?>
