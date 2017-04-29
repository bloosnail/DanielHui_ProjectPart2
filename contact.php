<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Daniel Hui</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	
	<body>
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header">
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="files/DanielHui_Resume.pdf">Resume</a></li>
						<li class="current"><a href="contact.php">Contact</a></li>
						<li><a href="about2.php">About</a></li>
					</ul>
				</nav>
			</div>

			<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div id="content">
						<!-- Content -->
						<header>
							<h2>Contact</h2>
						</header>

						<p>Email: dah124@pitt.edu <br>
						I check it pretty frequently so if I haven't responded I may have missed it -- feel free to send another one.</p>
						<br>

						<div class="mail">
							<h2>Contact Form</h2>
							<form name="form1" action="#" method="post"> 
								<ul>
									<li><h3>Your Email:</h3><input type='text' name='email'/></li>
									<br>
									
									<li><h3>Subject: </h3><input type='text' name='subject'/></li>
									<br>
									<li><h3>Message: </h3><input type='text' name='message' size="3"/></li>
									<br>
									<li class="submit"><input type="submit" name="submit" value="Submit" onclick="ValidateEmail(document.form1.email, document.form1.subject, document.form1.message)"/></li>
									
								</ul>
							</form>
							
							<?php							
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "mydb";
								
								//Create connection
								$conn = new mysqli($servername, $username, $password);
								
								// Create database
								$sql = "CREATE DATABASE mydb";
								
								// sql to create table
								$sql = "CREATE TABLE myEmails (
									id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
									email VARCHAR(50),
									reg_date TIMESTAMP
								)";

								//get email
								if(!empty($_POST['email'])) {
									$email = $_POST["email"];
									
									//insert into table
									$sql = "INSERT INTO myEmails (email)
									VALUES ('$email')";
								}
								
								
								$conn->close();
							?>
							
						</div>
						
					</div>
				</div>
			</section>


			<!-- Footer -->
			<?php include 'footer.php'; ?>
		</div>

		<!-- Scripts -->
		<script src="assets/js/email-validation.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

	</body>
</html>
