<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'") or die('query failed');

   if(mysqli_num_rows($select) > 0)
   {
	   $message[] = 'Username has already been taken'; 
   }
   else
   {
	   $insert = mysqli_query($conn, "INSERT INTO user(name, username, email, password) VALUES('$name', '$username', '$email', '$pass')") or die('query failed');
	   header('location:page2.php');
         
   }
}
?>



<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>dribbble</title>
<link rel="stylesheet" type="text/css" href="style.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->


</head>


<body>




<!--Page 1-->
<section class="one" id="one">

	<div class="row">
		<div class="col left">
			<img src="13824.jpg">
		</div>
		
		<div class="col mid">
		
			<div class="two">
			
			
			<div class="heading">
			<h2><b>Sign up to Dribbble</b></h2>
			</div>
			

			
			
			<?php
				if(isset($message)){
				foreach($message as $message){
					echo '<div class="message">'.$message.'</div>';
					}
				}
			?>

			
			
			<form action="" method="post" enctype="multipart/form-data">
				
				<div class="grid-container-element">
				
				<div class="grid-child-element">
					<label for="name"><b>Name</b></label><br>
					<input type="text" id="name" name="name" required><br>
				</div>
				
				<div class="grid-child-element">
					<label for="username"><b>Username</b></label><br>
					<input type="text" id="username" name="username" required><br>
				</div>
				
				</div>
				
				
				<label for="email"><b>Email</b></label><br>
				<input type="email" id="email" name="email" required><br>
				
				
				<label for="password"><b>Password</b></label><br>
				<input type="password" id="password" name="password" placeholder="6+ characters" required><br>
				
				<div class="check">
				<input type="checkbox" id="term" name="term" value="term" required>
				<label for="term"> Creating an account means you are okay with our
									<a href="">Terms of service, </a><a href="">Privacy Policy, 
									</a>and our default <a href="">Notification Settings</a></label><br><br><br>
				
				
				
				
				<input type="submit" name="submit" value="Create account" class="btn"><br><br>
				<!--<button class="button button1">Submit</button>-->
				
				<p>This site is protected by reCAPTCHA and the Google 
					<a href=""> Privacy Policy </a>and <a href="">Terms of Service </a>
					apply.</p>
				
			</form> 
			</div>
			
		</div>
		</div>
		
		<div class="col right">
		
			<div class="three">
				Already a member? <a href="">Sign In</a>
			</div>
			
		</div>
	</div>
		
</section>

</body>

</html>