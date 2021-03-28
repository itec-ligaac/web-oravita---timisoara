<?php


class hotelsAPI
{
  public function getArrayHotels($city) //give city to function
  {
    $curl = curl_init();
    curl_setopt_array($curl, [
    	CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/search?query=".$city."&locale=en_US",
    	CURLOPT_RETURNTRANSFER => true,
    	CURLOPT_FOLLOWLOCATION => true,
    	CURLOPT_ENCODING => "",
    	CURLOPT_MAXREDIRS => 10,
    	CURLOPT_TIMEOUT => 30,
    	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    	CURLOPT_CUSTOMREQUEST => "GET",
    	CURLOPT_HTTPHEADER => [
    		"x-rapidapi-host: hotels4.p.rapidapi.com",
    		"x-rapidapi-key: 7c977835e5msh157a34bbbecd3ebp155632jsnb22eb5e78f99"
    	],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    	echo "cURL Error #:" . $err;
    } else {
    	return $response;
    }
  }


}
