<?php 

$params_needed = ["depart", "return", "to", "from"];
$given_params = array_keys($_GET);
$missing_params = array_diff($params_needed, $given_params);

if(!empty($missing_params)) 
{
	echo "<H1> 404 Not Found </H1>";
	exit();
}

$route = 'routes/'. $_GET["from"].'-'. $_GET["to"];
if(!file_exists($route)) 
{
	echo "<H1> Route Not Available </H1>";
	exit();
}

$return = new DateTime($_GET["return"]);
$depart = new DateTime($_GET["depart"]);
$interval = date_diff($depart, $return);
$intervaldiff = $interval->format("%r%a");
$dateToday = new DateTime('NOW');
if($dateToday > $depart) 
{
	echo "<H1> Depart Day In Past </H1>";
	exit();
}

if($intervaldiff < 0 || $intervaldiff < 3) 
{
	echo "<H1> Night Stay Not Available </H1>";
	exit();
}

$day = ((int)explode("-", $_GET["depart"])[2]);
$path = $route.'/'.$day.'_7.php';
if (file_exists($path))
{
	include $path;
} else 
{
    echo "<H1> Departure Date Not Available </H1>";
}

?>
