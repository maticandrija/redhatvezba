<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<title>Second opinion</title>
	<link rel="stylesheet" href="css/MainPage.css">
	<link rel="stylesheet" href="css/navigation.css">
	<script src="js/jquery-3.3.1.js">
	</script>
	<script>
	
	</script>
</head>

<body>
	<img id="bgImg" src="images/worldMap.jpg" alt="">
	<div id="mainCotainer">
	<div class="nav">
		<div class="navBar">
			<ol>
				<li><a href="index.php">Second opinion</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="registration.php">Registration</a></li>
			</ol>
		</div>

		<div class="formContainerLog">

			<form action="php/logIn.php" method="POST">
				<div id="emailLog">
					<label for="emailLog">Email</label>
					<br>
					<input id="emaillog" type="email" name="emailLog" required>
					<br>
				</div>
				<div id="passLog">
					<label for="passLog">Password</label>
					<br>
					<input id="passwordLog" type="password" name="passLog" required>
				</div>
				<br>
				<div id="logButton">
					<button type="submit">Log in</button>
				</div>
			</form>


		</div>
	</div>
		
	</div>
	<div class="tekst" >
		<p>
			Send messages anywhere <br>to anyone 
		</p>
	</div>

</body>

</html>
