<?php

class Percentage{

    public function getRate($array, $countryName){
        foreach($array as $elem)
        {
          if(strcmp(strtolower($elem[0]), strtolower($countryName)) == 0)
            return $elem[2];
        }
        return -1;
    }

}
