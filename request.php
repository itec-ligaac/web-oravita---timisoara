<?php
if(isset($_POST['submit']))
{
  $name = $dateFrom = $dateTo = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $dateFrom = $_POST["dateFrom"];
    $dateTo = $_POST["dateTo"];
  }

  if(valiDate($dateFrom, $dateTo) == 0)
  {
    header("Location: ../filter.php?error=dateError");
    exit();
  }

  header("Location: ../filter.php?error=Success");
  exit();

}
else{
  //header("Location: ../filter.php?error=invalidSubmit");
  echo '
  https://data.xotelo.com/api/rates?hotel_key=g297930-d305178&chk_in=2021-03-27&chk_out=2021-03-29
  ';
  //exit();

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function valiDate($dateFrom, $dateTo)
{
  if($dateFrom > $dateTo)
    return 0;
  return 1;
}
