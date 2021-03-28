<?php
	include 'includes/autoloader.inc.php';
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
      <h1 class="display-3">Nice pick!</h1>
      <p class="lead">Next, type in your name and vacantion timeline. We'll make sure you get the best offers.</p>
    </header>

    <!-- Page Features -->

	<div class="row text-center">
<?php
 print '
        <form role="form" action="request.php?selectedCity='.$_GET['selectedCity'].'" method="post">
          <div class="form-group">

            <label for="exampleInputEmail1">
              Full name
            </label>
            <input type="text" class="form-control" id="exampleInputEmail1">
          </div>

            <label for="exampleInputDate1">
              Check-In Date
            </label>
          <div class="form-group">
            <input type="date" name="dateFrom" class="form-control" value="'.date('Y-m-d').'">
          </div>

            <label for="exampleInputDate1">
              Check-Out Date
            </label>
          <div class="form-group">
            <input type="date" name="dateTo" class="form-control" value="'.date('Y-m-d').'">
          </div>

          <button type="submit" name = "submitButton" class="btn btn-primary" style="margin-bottom: 20px">
            Submit
          </button>
        </form>
				'
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
