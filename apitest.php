<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Weather Report</title>
  </head>
  <body>
	<div class="container" >
	<h1>Weather report!</h1>
		<?php
			require_once __DIR__ . '/vendor/autoload.php';
			$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
			$dotenv->load();
			$query = ucfirst($_POST['cityName']);
			$apikey = $_ENV['API_KEY'];
			
			$units = 'metric';
			$url = 'http://api.openweathermap.org/data/2.5/weather?q='.$query.'&appid='.$apikey.'&units='.$units.'';

			//Fetch json 
			$weatherjson = file_get_contents($url);

			$res = json_decode($weatherjson, 1);

			$weathericon = $res['weather'][0]['icon'];
			$weather_desc = $res['weather'][0]['description'];
			$temperature = $res['main']['temp'];
			$feels_like = $res['main']['feels_like'];
			$wind_speed = $res['wind']['speed'];

			echo "<h2> Weather is currently in " . $query . " is : " . ucfirst($weather_desc). "</h2>";
			echo "<img src = 'http://openweathermap.org/img/wn/".$weathericon."@2x.png'</img>";
			echo "<h2> Temperature in " . $query . " is : " . $temperature . " Degree Celsius</h2>";
			echo "<h2> Temperature in " . $query . " feels like : " . $feels_like . " Degree Celsius</h2>";
			echo "<h2> Wind speed in " . $query . " is : " . $wind_speed . " m/s </h2>";

		?>
	</div>
  </body>
</html>
