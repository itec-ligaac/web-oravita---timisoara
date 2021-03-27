<?php

$string = file_get_contents("vaccinations.json");
$json = json_decode($string, TRUE);

/*
foreach($json as $country)
{
  $data = $country['data'];
  $latestUpdateVaccinations = 0;
  $countryName = "";
  foreach($data as $dataPiece)
  {
    if(isset($dataPiece['total_vaccinations']))
    {

      if($dataPiece['total_vaccinations'] > $latestUpdateVaccinations)
      {
          $latestUpdateVaccinations = $dataPiece['total_vaccinations'];
          $countryName = $country['country'];
      }

    }
    if($latestUpdateVaccinations > 0)
      print_r($countryName . " \n" . $latestUpdateVaccinations);

  }
}
*/
$countries = array("");
$vaccinated = array("");
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
foreach($countriesVaccinatedArray as $elem)
print_r($elem[0] . " - " . $elem[1] . "\n");
