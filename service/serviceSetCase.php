<?php
	$link = mysqli_connect("us-cdbr-iron-east-03.cleardb.net", "b28dd7cab66d3c",
							"a15a0348", "ad_d5bdca05bc3f916");
	if ($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$caseName = $request->caseName;
	$state = $request->state;
	$city = $request->city;
	$units = $request->units;
	$clouds = $request->clouds;
	$temp = $request->temp;
	$feelsLike = $request->feelsLike;
	$humidity = $request->humidity;
	$windSpeed = $request->windSpeed;
	$windChill = $request->windChill;
	
	if ($temp == "") { $temp = "NULL"; }
	if ($feelsLike == "") { $feelsLike = "NULL"; }
	if ($humidity == "") { $humidity = "NULL"; }
	if ($windSpeed == "") { $windSpeed = "NULL"; }
	if ($windChill == "") { $windChill = "NULL"; }
	
	$sql = "INSERT INTO cases (case_name, state, city, units, clouds, temp, feels_like,
							   humidity, wind_speed, wind_chill) VALUES
	        ('$caseName', '$state', '$city', '$units', '$clouds', $temp, $feelsLike,
			 $humidity, $windSpeed, $windChill)";

	if (mysqli_query($link, $sql)) {
		echo "Records added successfully.";
	}
	else {
		echo "ERROR: Could not execute $sql. " . mysqli_error($link);
	}
	
	mysqli_close($link);
?>
