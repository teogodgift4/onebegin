<?php

$api_key = '510eb7be47904818b8a174646202809';

if(!isset($_GET['city']) || trim($_GET['city']) == '')
{
   echo "You did not fill out the city name";
}

$city = $_GET['city'];

$api_data = file_get_contents("https://api.weatherapi.com/v1/current.json?key=".$api_key."&q=".$city);
$weather_array = json_decode($api_data,true);

$name = $weather_array["location"]["name"];
$region = $weather_array["location"]["region"];
$country = $weather_array["location"]["country"];

$time = $weather_array["location"]["localtime"];

$temp_c = $weather_array["current"]["temp_c"];

$condition = $weather_array["current"]["condition"]["text"];

echo $name;
echo "\n";
echo $region;
echo "\n";
echo $country;
echo "<br/>";
echo $time;
echo "<br/>";
echo $temp_c;
echo "<br/>";
echo $condition;

?>