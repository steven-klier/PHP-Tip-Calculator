<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP Tip Calculator</title>
 <!-- Bootstrap -->
<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<style>
		p{
			font-size:30px;
		}
	</style>
</head>

<body>
	
	<?php 
		
		$bill1 = $_POST['bill'];
		$bill2 = floatval($bill1);
		$percent = $_POST['tip'];
		$percentage = ($percent * 100);
		$tip = round(($bill2 * $percent),2);
		$total = round(($bill2 + $tip),2);
		
		echo "<h1 class='display-3 text-center mt-4 mb-4'>Calculated Tip</h1>";
	
		if($bill2 <= 0){
			echo "<p class='text-center text-danger'>INVALID INPUT</p>";
		}
	
		echo "<p class='text-center'><b>Bill:</b> $$bill2</p>";
	 	echo "<p class='text-center'><b>Percentage:</b> $percentage%</p>";
	 	echo "<p class='text-center'><b>Tip:</b> $$tip </p>";
		echo "<p class='text-center mb-4'><b>Total:</b> $$total </p>";
		echo "<a href='index.html' class='btn btn-light btn-lg d-block mx-auto mt-4 col-4'>Reset</a>";
	
	?>
	
	<!-- jQuery --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Plugins -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
</body>
	
</html>
