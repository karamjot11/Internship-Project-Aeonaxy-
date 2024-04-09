<?php

	include 'config.php';
	
	$query = "SELECT email FROM user INNER JOIN describes ON user.id = describes.id;";
	$result = mysqli_query($conn, $query);
	

?>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>dribbble</title>
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" href="http://unpkg.com/boxicons@latest/css/boxicons.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->


</head>
<body>



<!--header-->
<header>
<div class="bx bx-menu" id="menu-icon"></div>
<ul class="navlist">
<li><img src="black.png"></li>
<li><a href="">Inspiration</a></li>
<li><a href="">Find Work</a></li>
<li><a href="">Learn Design</a></li>
<li><a href="">Go Pro</a></li>
<li><a href="">Hire Designers</a></li>
</ul>
</header>
	
		



<!--body-->

<section class="em" id="em">

	<div class="h">
		<h1>Please verify your email...</h1>
	</div>
	
	
	<div class="emailpic">
		<img src="email.png">
	</div>
	
	
	<div class="para">
		<p>Please verify your email address. We've sent a confirmation email to:</p>
		<br>
		
		<h3>
			<?php 
				$r = mysqli_fetch_array($result); 
				$k = $r['email'];
				echo "$k";
			?>
		</h3>
		<br>
		
		<p>Click the confirmation link in that email to begin using Dribbble.</p>
		<br>
		
		<p>Didn't receive the email? Check your Spam folder, it may have been caught by a 
			filter. If you still don't see it, you can <a href="">resend the confirmation 
				email.</a></p>
		<br>
		
		<p>Wrong email address? <a href="">Change it.</a></p>
		<br>
	</div>

</section>



<!--footer-->

<div class="footerr">

		<div class="ends">
				<div class="cols">
					<div class="i">
						<img src="ss.png">
					</div>
					<p>Dribbble is the world's leading community for creatives to share, grow and get hired.</p>
				</div>
				
				
				
				<div class="cols">
					<h3>For designers</h3>
                        <ul>
							<li><a href="">Go pro!</a></li>
                            <li><a href="">Explore design work</a></li>
                            <li><a href="">Design blog</a></li>
							<li><a href="">Overtime podcast</a></li>
							<li><a href="">playoffs</a></li>
							<li><a href="">Weekly Warm-Up</a></li>
							<li><a href="">Refer a Friend</a></li>	
							<li><a href="">Code of conduct</a></li>
                        </ul>
				</div>
				
				<div class="cols">
					<h3>Hire designers</h3>
                        <ul>
							<li><a href="">Post a job opening</a></li>
                            <li><a href="">Post a freelance project</a></li>
                            <li><a href="">Search for designers</a></li>
						</ul>
						<br>
					<h3>Brands</h3>
						<ul>
							<li><a href="">Advertise with us</a></li>
                        </ul>
				</div>
				
				<div class="cols">
					<h3>Company</h3>
                        <ul>
							<li><a href="">About</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Support</a></li>
							<li><a href="">Media kit</a></li>
							<li><a href="">Testimonials</a></li>
							<li><a href="">API</a></li>
							<li><a href="">Terms of service</a></li>
							<li><a href="">Privacy policy</a></li>
							<li><a href="">Cookie policy</a></li>
                        </ul>
				</div>
				
				
				<div class="cols">
					<h3>Directories</h3>
                        <ul>
							<li><a href="">Design jobs</a></li>
							<li><a href="">Designers for hire</a></li>
							<li><a href="">Freelance designers for hire</a></li>
							<li><a href="">Tags</a></li>
							<li><a href="">Places</a></li>
						</ul>
						<br>
						
					<h3>Design assets</h3>
						<ul>
							<li><a href="">Dribbble Marketplace</a></li>
							<li><a href="">Creative Market</a></li>
							<li><a href="">Fontspring</a></li>
							<li><a href="">Font Squirrel</a></li>
							
                        </ul>
				</div>
				
				
				<div class="cols">
					<h3>Design Resources</h3>
                        <ul>
							<li><a href="">Freelancing</a></li>
							<li><a href="">Design Hiring</a></li>
							<li><a href="">Design Portfolio</a></li>
							<li><a href="">Design Education</a></li>
							<li><a href="">Creative Process</a></li>
							<li><a href="">Design Industry Trends</a></li>
                        </ul>
				</div>
				
				
		</div>
		

	<script src="https://unpkg.com/scrollreveal"></script>


</div>



<script type="text/javascript" src="s.js"></script>


	
</body>

</html>