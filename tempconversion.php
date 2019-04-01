<html>
<body>
<?php 
	$temperature = $_REQUEST["temperature"];
	$result = 0;
	$unit = "";
	if (isset($_REQUEST["FtoC"])) { 
		$result = 5.0/9.0 * ($temperature - 32);
		$unit = "Celsius";
	} elseif(isset($_REQUEST["CtoF"])) {
		$result = 9.0/5.0 * $temperature + 32;
		$unit = "Fahrenheit";
	}
	echo "<h1>";
	echo "The result is " .$result. " ". $unit;
	echo "</h1>";  
?>
</body>
</html>