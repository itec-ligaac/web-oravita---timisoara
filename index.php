<?php
	include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>COVacation</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">COVacation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Hello there!</h1>
      <p class="lead">Feel free to browse the available destinations below or search for something specific.</p>
      <a href="#" class="btn btn-primary btn-lg">Button that does nothing yet</a>
    </header>

    <!-- Page Features -->

	<div class="row text-center">

	<?php

	$view=new View();
	$destinations=$view->getDestinations();

	$vac=new Vaccinations();
	$vaccines=$vac->getVaccinations();

  $tempObj=new Temperature();
 

	$percentageObject = new Percentage();

	for($i=0;$i<count($destinations);$i=$i+1){
			$rate = $percentageObject->getRate($vaccines, $destinations[$i]['country']);
      $temp=$tempObj->getTemperature($destinations[$i]['city']);

		print '
		<div class="col-lg-3 col-md-6 mb-4">
		  <div class="card h-100">
			<img class="card-img-top" src="https://www.mymallorcatrips.com/wp-content/uploads/2019/08/sephar8-500x325.jpg" alt="">
			<div class="card-body">
			  <h4 class="card-title">'.$destinations[$i]['city'].', '.$destinations[$i]['country'].'</h4>
			  <p class="card-text">'. 'Vaccination rate is ' .$rate.'% </p>
        <p class="card-text">'. 'Temperature: ' .$temp.'°C </p>
			</div>
			<div class="card-footer">
        <a href="filter.php?post_id='.$destinations[$i]['dest_id'].'" class="btn btn-primary">Find Out More!</a>
			</div>
		  </div>
		</div>

	  ';
	}
	?>
	</div>
    <!-- /.row -->


  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
