<?php
    session_start();
    include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Second opinion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/profil.css" />
    <script src="../js/jquery-3.3.1.js">    
	</script>
</head>
<body>
    <?php
    
    $myemail = $_SESSION['email'];
        // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM `customer` WHERE email = '$myemail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name = $row["first_name"]; 
    $lastname = $row["last_name"]; 
    ?>

    <nav class="nav">
        <div>
            <h2><?php echo $lastname . " " . $name ?></h2>
            <a href="logout.php" class ="logOut">Log out</a>
        </div>
        
    </nav>

    <br>
    <div class = "mails">
        <?php
            $sql1 = "SELECT * FROM `customer` WHERE email != '$myemail'";
            $result1 = $conn->query($sql1);
            while($row = $result1->fetch_assoc()) {
                $email = $row["email"];
                $name = $row["first_name"];
                $lastname = $row["last_name"];
                echo $name . " ". $lastname. "<br>" . $email . "<br>";
                echo "<br>";
            }
        ?>
    </div>
    <div class = "chat" >
        <form action="msg.php" method="post" >
            <h2>Send to (email): </h2>
            <input type="text" name = "to" class = "to" require>
            <!--<input type="text" name = "msg">-->
            <textarea rows="10" cols="40" name="msg" class='msg' placeholder = 'Enter messege here...' require></textarea>
            <button type="submit" class = 'submit'>send</button>
        </form>
    </div>
    <div class = "passchange" >
        <form action="changepass.php" id="form" method="post" onsubmit="event.preventDefault(); validateMyForm()">
            <label for="pasword">New password</label>
			<br>
			<input type="password" name="password" id="password" class = "passchangei" placeholder="Need to contain more than 8 caracters" required>
			<br>
			<label for="re-enterPassword">Re-enter password</label>
			<br>
            <input type="password" name="re-enterPassword" id="re-enterPassword" class = "passchangei" placeholder="Re-enter Password" required>
            <br>
            <input type="submit" value="change" class = "change">
		</form>

    </div>
    <div class = "conversation">
        <?php 
      /*   $poruka = "";
        $nizpor = array();

        $poruke1 = "";
        $i=1;
  */
            $sql2 = "SELECT * FROM `conversation` ";
           
            $result = $conn->query($sql2);
           
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $sender = $row["senderEmail"];
                    $receiver = $row["receiverEmail"];
                    $msg = $row["message"];
                    if($receiver == $myemail)
                    {
                        echo "<div class = 'receiver'>". $sender . ":<br>". $msg. "</div>";
                    }
                    else if ($sender == $myemail)
                    {
                        echo "<div class = 'me'>". $sender . " to ". $receiver .": <br>". $msg. "</div> ";
                    }
                 
                    /* $poruka =  $sender . " poruka: " . $msg;
                    $nizpor[$i] = $poruka;
                    $i++; */
                }
               /* $n = $i;
    
                for($i = 1; $i < $n; $i++) {
                    echo $nizpor[$i];
                    echo "<br>";
                }
                   */     
            } else {
                echo "0 results";   
            }
        
        ?>
    </div>


<script>
    function validateMyForm()
    {
        var form = document.getElementById("form");
        var pass1 = document.getElementById("password");
        var pass2 = document.getElementById("re-enterPassword");
        var errs = 0;
    if(!passValidate(pass1.value, pass2.value))
    {
        pass1.style.border = "2px solid red";
        pass2.style.border = "2px solid red";
        errs++;
    }else
    {
        pass1.style.border = "";
        pass2.style.border = "";
    }
    if(errs == 0)
    {
    form.submit();
    }else
    {
        
    }
    function passValidate(pass1, pass2)
{
    var err = 0;
    if(pass1 != pass2)
    {
        err++;
    }
    else if(pass1.length<8)
    {
        err++;
    }
    if(err == 0)
    {
        return true;
    }
    else 
    {
        return false;
    }
    
    }
}
</script>
</body>
</html>