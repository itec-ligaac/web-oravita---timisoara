<?php

class Temperature{

    public function getTemperature($city){
        $url="http://api.openweathermap.org/data/2.5/weather?q=".$city."&APPID=734e9296b96f4d4d937464dc43b3f43f";
        $string = file_get_contents($url);
        $json = json_decode($string, TRUE);

        $temp = $json['main']['temp'];

        return $temp-273.15;
    }

}
