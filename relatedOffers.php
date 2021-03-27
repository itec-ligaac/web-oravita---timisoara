<?php

	include 'includes/autoloader.inc.php';
  include 'headerFile.php';

$city = $_GET["selectedCity"];

$hotel=new HotelParser();
$hotels=$hotel->getHotels($city);

?>

<body>
<table class="table">
  <tr class="table-active">
    <th>Nearby hotels</th>
  </tr>
  <tr>
  <?php
  for($i = 0; $i < sizeof($hotels); $i++)
  {
    ?>
      <td><?php echo $hotels[$i] ?></td>
      <?php
  }
?>
  </tr>
</table>
</body>
