<?php
if(isset($_POST['submitButton']))
{
  $name = $dateFrom = $dateTo = "";
  $city = $_GET["selectedCity"];
  //print_r($city);
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $dateFrom = $_POST["dateFrom"];
    $dateTo = $_POST["dateTo"];
  }

  if($dateFrom > $dateTo)
  {
    header("Location: ../web-oravita---timisoara/filter.php?error=dateError");
    exit();
  }

  header("Location: ../web-oravita---timisoara/relatedOffers.php?selectedCity=$city");
  exit();
}
else
{
  print_r("Fail");
  exit();

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
