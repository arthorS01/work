<?php

try{

    $response = [];
    $username = "";
    //analyze url signature
    $geolocationAPIkey = "0bc2c66df8384133aaf9fd4f964cd947";
    $weatherKey ="df0f6cc9f886500e41e8598e594c85f2";
    
    $url = $_SERVER["REQUEST_URI"];
    //get IP address
    $ip = getenv("REMOTE_ADDR");

    //get current geolocation
    $locationApi = "https://api.ipgeolocation.io/ipgeo?apiKey={$geolocationAPIkey}";
    
    $curlHandler = curl_init();

    curl_setopt($curlHandler,CURLOPT_URL,$locationApi);

    curl_setopt($curlHandler,CURLOPT_RETURNTRANSFER,true);

    //get location details
    $data = curl_exec($curlHandler);
    $api_data = json_decode($data,true);

    $response["client_ip"] = $api_data["ip"];
    $lat = $api_data["latitude"];
    $lon = $api_data["longitude"];
    
 
       
    if(isset($_GET["username"])){
        $username = $_GET["username"];
        $weatherAPi = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$weatherKey}";

        curl_setopt($curlHandler, CURLOPT_URL,$weatherAPi);
    
        $result = curl_exec($curlHandler);

       
        $result = json_decode($result,true);
     
        //convert kelvin temperature to celcius
        $temp = $result["main"]["temp"] - 273;

        $temp = ceil($temp);
        $location = $result["name"];
        $response['location'] =$result["name"];
        $response["greeting"] = "Hello, {$username}!, the temperature is {$temp} degree celcius in {$location}";
    };

   
   echo JSON_encode($response);

   
}catch(Exception|Error $e){
    echo "An error occured, please try it again some time later";
}