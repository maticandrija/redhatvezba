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
<?php
        //include("config.php"); 


        $servername = "localhost";
        $username = "root";
        $password = "Mojasifra1-";
        $dbname = "secondopinion";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 


        $name =$_POST["firstName"];
        $email = $_POST["email"];
        $lastName = $_POST["lastName"];
        $pass = $_POST["password"];
        $gender = $_POST["gender"];

    //if(provera()){
        $sql = "INSERT INTO customer (email, password , last_name, first_name, gender)
        VALUES ('$email', '$pass' , '$lastName','$name', '$gender' )";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
   /* }
    else
    {
        echo "vec postoji taj mail";
    }
 */


 /*    function provera()
    {
        $email = $_POST["email"];
        $sql = "SELECT * FROM `customer` WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            return false;
        }
        else
        {
            return true;
        } 

    } */

?>
</body>
</html>
