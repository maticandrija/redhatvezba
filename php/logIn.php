<?php
    session_start();
    include("config.php");
   

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
      
    $myemail = $_POST['emailLog'];
    $mypassword = $_POST['passLog']; 
      
    $sql = "SELECT * FROM `customer` WHERE email = '$myemail' and password = '$mypassword'";
    $result = $conn->query($sql);
      
   
      
    // If result matched $myemail and $mypassword, table row must be 1 row
    $_SESSION['email'] = $myemail;
    if ($result->num_rows == 1)  {
        $_SESSION['email'] = $myemail;
        
        header("Location: profil.php");
        exit;
     
    }else {
        header("Location: ../index.php");
    }
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

</body>
</html>
