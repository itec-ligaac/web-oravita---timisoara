<?php


class HotelParser{

    public function getHotels($city){
      $hotel=new hotelsAPI();
      $hotels=$hotel->getArrayHotels($city);
      $json = json_decode($hotels, TRUE);

      $names = array("");
      for($i = 0; $i < sizeof($json['suggestions']); $i++)
        if(isset($json['suggestions'][$i]['entities'][0]['name']))
          array_push($names, $json['suggestions'][$i]['entities'][0]['name']);


      return $names;
    }
}
