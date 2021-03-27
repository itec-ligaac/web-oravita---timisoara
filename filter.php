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
      <h1 class="display-3">Nice pick!</h1>
      <p class="lead">Next, type in your name and vacantion timeline. We'll make sure you get the best offers.</p>
    </header>

    <!-- Page Features -->

	<div class="row text-center">

        <form role="form" action="request.php" method="post">
          <div class="form-group">
            
            <label for="exampleInputEmail1">
              Full name
            </label>
            <input type="email" class="form-control" id="exampleInputEmail1">
          </div>
            
            <label for="exampleInputDate1">
              Check-In Date
            </label>
          <div class="form-group">
            <input type="date" name="dateFrom" class="form-control" value="<?php echo date('Y-m-d');?>">
          </div>

            <label for="exampleInputDate1">
              Check-Out Date
            </label>
          <div class="form-group">
            <input type="date" name="dateFrom" class="form-control" value="<?php echo date('Y-m-d');?>">
          </div>
         
          <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">
            Submit
          </button>
        </form>
      
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
