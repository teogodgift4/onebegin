<?php

class Weather {

     private $api_key;
     public $city;
     public $name;
     public $region;
     public $country;
     public $time;
     public $temp_c;
     public $condition;

     function __construct($api_key, $city) {
        $this->api_key = $api_key;
        $this->city = $city;
        $api_data = file_get_contents("https://api.weatherapi.com/v1/current.json?key=".$api_key."&q=".$city);
        $weather_array = json_decode($api_data,true);
        $this->name = $weather_array["location"]["name"];
        $this->region = $weather_array["location"]["region"];
        $this->country = $weather_array["location"]["country"];
        $this->time = $weather_array["location"]["localtime"];
        $this->temp_c = $weather_array["current"]["temp_c"];
        $this->condition = $weather_array["current"]["condition"]["text"];
      }
    
   

    function printName(){
        echo $this->name;
    }

    function printRgeion(){
        echo $this->region;
    }

    function printCountry(){
        echo $this->country;
    }

    function printTime(){
        echo $this->time;
    }

    function printTemp_c(){
        echo $this->temp_c;
    }

    function printCondition(){
        echo $this->condition;
    }

}


?>