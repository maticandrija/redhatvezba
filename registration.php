<!DOCTYPE html>


<html>

<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<title>Second opinion</title>
	<link rel="stylesheet" href="css/registration.css">
	<link rel="stylesheet" href="css/navigation.css">
	<link rel="javascirp" href="">
	<title>
	</title>
</head>

<body>
	<img id="bgImg" src="images/regbg.png" alt="">
	<div class="nav">
		<div class="navBar">
			<ol>
				<li><a href="index.php">Second opinion</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="registration.php">Registration</a></li>
			</ol>
		</div>

		<div class="formContainerLog">

			<form  action="php/logIn.php" method="POST">
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


	<div id="regWrapper">
		<img src="images/user.png" alt="" class="user">
		<h2>Register Here!</h2>
		<br>
		<form action="php/reg.php" method="POST" id="form" onsubmit="event.preventDefault(); validateMyForm()">
			<label for="firstName">First Name</label>
			<br>
			<input type="text" name="firstName" id="firstName" placeholder="Enter First Name" required>

			<br>

			<label for="lastName">Last Name</label>
			<br>
			<input type="text" name="lastName" id="lastName" placeholder="Enter Last Name" required>

			<br>

			<label for="email">Email</label>
			<br>
			<input type="email" name="email" id="email" placeholder="Enter Your Name" required>

			<br>
			<label for="pasword">Password</label>
			<br>
			<input type="password" name="password" id="password" placeholder="Need to contain more than 8 caracters" required>
			<br>
			<label for="re-enterPassword">Re-enter Password</label>
			<br>
			<input type="password" name="re-enterPassword" id="re-enterPassword" placeholder="Re-enter Password" required>
			<br>

			<label for="">Gender</label>
			<select name="gender" id="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<br>
			<br>
			<input type="submit" value="Register">

		</form>

	</div>
	
	<script src="js/validation.js"></script>
</body>

</html>
