<?php

include 'config.php';

if(isset($_POST['finish'])){
	
	
	$datas = $_POST['data'];
	$allData = implode(",",$datas);
	
	$insert = mysqli_query($conn, "INSERT INTO describes(describesyou) VALUES('$allData')") or die('query failed');
	   header('location:page3.php');

}

?>




<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>dribbble</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->


</head>
<body>



<!--Page 3-->
<section class="one" id="one">

	<div class="i">
		<img src="ss.png">
	</div>
	
	
	<div class="a">

		
	<form action="" method="post" enctype="multipart/form-data" id="form_upload">	

		
		
		
		<h2>What brings you to Dribbble?</h2>
		<br>
		
		<p>Select the options that best describe you. Don't worry, you can explore other options later.</p>
		<br>
		
		
		<div class="g">
		
		<div class="o">
		<img src="1.png"><br>
		<h3>I'm a designer looking to share my work<h3><br>
		<input type="checkbox" name="data[]" value="designer looking to share my work">
		</div>
		
		<div class="o">
		<img src="2.png"><br>
		<h3>I'm looking to hire a designer<h3><br>
		<input type="checkbox" name="data[]" value="looking to hire a designer">
		</div>
		
		<div class="o">
		<label for="3"><img src="3.png"></label><br>
		<label for="3"><h3>I'm looking for design inspiration<h3></label><br>
		<input type="checkbox" name="data[]" value="looking for design inspiration">
		</div>
		
		</div>
		
		<input type="submit" id="finish" name="finish" value="Finish" class="btn">
		<br>
		<br>
		
		
		
	</form>	
	</div>
	
		
</section>



	
</body>

</html>