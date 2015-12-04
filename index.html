<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Weather Advisor</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--- Import user-defined stylesheet -->
		<link rel="stylesheet" href="style.css" />
		
		<!--- Import bootstrap, jquery, angularjs -->
		<link rel="stylesheet"
			  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	</head>

	<body>
	<!--- main controller -->
	<div ng-app="cs252" ng-controller="ctrl" ng-cloak>
		<h1 id="title">Weather Advisor</h1>
		<div>
			<p>Name of case: <input type="text" name="case" /></p>
			<p>City: <input type="text" name="city" /></p>
			<p>State: <select ng-model="ddlStates"
							  ng-options="state.name for state in States">
					  </select>
			<hr />
			<p>Units: <select>
					   <option value="customary">US Customary (Fahrenheit/MPH)</option>
					   <option value="metric">Metric (Celsius/KPH)</option>
					  </select></p>
			<p>Temperature: <input type="number" name="temp" />
							<select ng-model="tempOption">
								<option value="">Less Than</option>
								<option>Greater Than</option>
							</select></p>
			<p>Feels Like: <input type="number" name="feelsLike" />
							<select ng-model="feelsOption">
								<option value="">Less Than</option>
								<option>Greater Than</option>
							</select></p>
			<p>Humidity Percentage: <input type="number" name="humidity" />
							<select ng-model="humidityOption">
								<option value="">Less Than</option>
								<option>Greater Than</option>
							</select></p>
			<p>Wind Speed: <input type="number" name="windSpeed" />
							<select ng-model="windSpeedOption">
								<option value="">Less Than</option>
								<option>Greater Than</option>
							</select></p>
			<p>Wind Chill: <input type="number" name="windChill" />
							<select ng-model="windChillOption">
								<option value="">Less Than</option>
								<option>Greater Than</option>
							</select></p>
							
			<button ng-click="setInfo()">Submit</button>
		</div>
		<br /><hr /><br />
		<div>
			<p>Cases: <select ng-model="ddlCases"
							  ng-options="case for case in Cases">
					  </select>
			<button ng-click="getInfo()">Get Info</button>
		</div>
	</div>
	</body>
	
</html>



<script>

var app = angular.module('cs252', []);
app.controller('ctrl', function($scope, $http) {
	
	// Define States in states drop down list
	$http.get('JSON/states.json')
		 .success(function(data) {
			 $scope.States = data;
		 });
		 
	// Define Cases in cases drop down list
	$http.get('service/serviceGetAllCases.php')
	     .success(function(data) {
			 var cases = [];
			 for (i = 0; i < data.length; i++) {
				 cases.push(data[i].case_name);
			 }
			 $scope.Cases = cases;
		 });
	
	// Get case and params from user
	// Store info in database
	$scope.setInfo = function() {
		var caseName = $("[name='case']").val();
		var state = $scope.ddlStates.abbreviation;
		var city = $("[name='city']").val();
		var units;
		var temp = $("[name='temp']").val();
		var feelsLike = $("[name='feelsLike']").val();
		var humidity = $("[name='humidity']").val();
		var windSpeed = $("[name='windSpeed']").val();
		var windChill = $("[name='windChill']").val();
		if ( $("[value='customary']").is(':checked') ) {
			units = "customary";
		}
		else {
			units = "metric";
		}
		var data = {
			"caseName":caseName,
			"state":state,
			"city":city,
			"units":units,
			"clouds":"no_pref",
			"temp":temp,
			"feelsLike":feelsLike,
			"humidity":humidity,
			"windSpeed":windSpeed,
			"windChill":windChill
		};
		
		// Send POST request to update database
		$http({
			url: 'service/serviceSetCase.php',
			method: "POST",
			data: data
		})
		.then(function(response) {
			console.log(response);
		});
	};
	
	// Get information from the weatherunderground API
	// Display information on the web page
	// http://api.wunderground.com/api/b5506c917cd7fe50/
	$scope.getInfo = function() {
		// Get case information from the database
		$http({
			url: "service/serviceGetCase.php",
			method: "POST",
			data: { "caseName":$scope.ddlCases }
		})
		.then(function(response) {
			var caseInfo = response.data[0];
			console.log(caseInfo);
			
			// Get current weather conditions from API
			var city = caseInfo.city;
			var state = caseInfo.state;
			var baseURL = "http://api.wunderground.com/api/b5506c917cd7fe50/conditions/q/";
			var url = baseURL + state +  "/" + city + ".json";
			$http({
				url: url,
				method: "POST"
			})
			.then(function(response) {
				var weather = response.data.current_observation;
				console.log(weather);
				
				// Determine if weather matches the given case parameters
				var units = caseInfo.units;
				var temp = caseInfo.temp;
				var feelsLike = caseInfo.feels_like;
				var humidity = caseInfo.humidity;
				var windSpeed = caseInfo.wind_speed;
				var windChill = caseInfo.wind_chill;
				
				if (temp != null) {
					if (units[0] == 'c') {			// Customary units
						
					}
					else if (units[0] == 'm') {	 	// Metric units
						
					}
				}
				
			});
		});
	};
});

</script>
