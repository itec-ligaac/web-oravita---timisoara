<?php


class Vaccinations{

    public function getVaccinations(){
      $string = file_get_contents('https://raw.githubusercontent.com/owid/covid-19-data/master/public/data/vaccinations/vaccinations.json%27');
      $json = json_decode($string, TRUE);
      $countries = array("");
      $vaccinated = array("");
      $countriesVaccinatedArray = array_map(null, $countries, $vaccinated);
      foreach($json as $temporaryJson)
      {
        foreach($temporaryJson as $data)
        {
          $latestUpdateVaccinations = 0;
          $countryName = "";
          if(is_array($data))
          {
            foreach($data as $dataPiece)
            {
              if(isset($dataPiece['total_vaccinations']))
              {

                if($dataPiece['total_vaccinations'] > $latestUpdateVaccinations)
                {
                    $latestUpdateVaccinations = $dataPiece['total_vaccinations'];
                    $countryName = $temporaryJson['country'];
                }

              }


            }
          }
          if($latestUpdateVaccinations > 0)
          {
            array_push($countries, $countryName);
            array_push($vaccinated, $latestUpdateVaccinations);

          }
            //print_r($countryName . " \n" . $latestUpdateVaccinations);
            //$countriesVaccinatedArray($countryName => $latestUpdateVaccinations);
        }
      }
      $countriesVaccinatedArray = array_map(null, $countries, $vaccinated);
      //foreach($countriesVaccinatedArray as $elem)
      //print_r($elem[0] . " - " . $elem[1] . "\n");
      return $countriesVaccinatedArray;
    }
}