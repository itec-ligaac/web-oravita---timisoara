<?php
	include 'includes/autoloader.inc.php';
  include_once('simple_html_dom.php');
	include 'headerFile.php';
?>



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
      <form role="form" action="filter_action.php" method="post">
          <div class="form-group">

            <label for="exampleInputEmail1">
              Minimum vaccination rate of destination country: (in %)
            </label>
            <?php
            if(!empty($_GET['rate'])){
              print '<input type="number" class="form-control" name="rate" value="'.$_GET['rate'].'">';
            }
            else{
              print '<input type="number" class="form-control" name="rate">';
            }
            ?>
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">
              Minimum temperature of destination: (in °C)
            </label>
            <?php
            if(!empty($_GET['temperature'])){
              print '<input type="number" class="form-control" name="temperature" value="'.$_GET['temperature'].'">';
            }
            else{
              print '<input type="number" class="form-control" name="temperature">';
            }
            ?>
          </div>

          <button type="submit" class="btn btn-primary" style="margin-bottom: 20px" name="filtButton">
            Submit
          </button>
        </form>
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

        //$search_keyword=str_replace(' ','+',$search_keyword);
        $newhtml =file_get_html("https://www.google.com/search?q=".$destinations[$i]['city']."&tbm=isch");
        $result_image_source = $newhtml->find('img',1)->src;


        if((empty($_GET['rate']))||($_GET['rate']<$rate)){
          if((empty($_GET['temperature']))||($_GET['temperature']<$temp)){
            print '
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
              <img class="card-img-top" src="'.$result_image_source.'" alt="">
              <div class="card-body">
                <h4 class="card-title">'.$destinations[$i]['city'].', '.$destinations[$i]['country'].'</h4>
                <p class="card-text">'. 'Vaccination rate is ' .$rate.'% </p>
                <p class="card-text">'. 'Temperature: ' .$temp.'°C </p>
              </div>
              <div class="card-footer">
                <a href="filter.php?selectedCity='.$destinations[$i]['city'].'" class="btn btn-primary">Find Out More!</a>
              </div>
              </div>
            </div>

            ';
          }
        }
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
