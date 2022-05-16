<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Capstone Project PHP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html"><span style="color: blue;">I</span>M</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="dashboard.php">Home</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Menu</a></li>
          <li><a class="nav-link scrollto" href="customers.php">Customers</a></li>
          <li><a class="nav-link scrollto " href="recipes.php">Recipes</a></li>
          <li><a class="nav-link scrollto" href="orders.php">Orders</a></li>
          <li><a class="nav-link scrollto" href="ingredients.php">Ingredients</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  </header><!-- End Header -->

  <main id="main">
  <!-- ======= Recipes ======= -->
  
  <section id="services" class="services section-bg">
      <div class="container mt-5">
			<div class="section-title">
			  <h2> Recipes Panel </h2>
			<p> What would you like to do? </p>
			</div>

        <div class="row">
			<div class="col-8">
    			<div class="form">  
 				 <h2>Create Recipe</h2>
 				 <span style="color:#FF0000; font-size:14px">* Required</span>
				 
				  <Form action="create.php" method="post">
				  <input type="hidden" name="id" value="recipes"/>
					<label> Recipe Name <span style="color:#FF0000">*</span></label> <br>
					<input type="text" name="recipe_name"  class="form-control"/><br>
					<label> Recipe Ingredients <span style="color:#FF0000">*</span></label> <br>
					<input type="text" name="recipe_ingredients"  class="form-control"/><br>
					<label> Recipe Description </label> <br>
					<input type="text" name="recipe_desc"  class="form-control"/><br>
					
					<button class="btn btn-success" type="submit"> Save </button>
					
					</Form>
	  				</div>
					</div>
			<div class="col-4">
            <div class="icon-box">
              <h4>View Recipe Database</h4>
              <p>View your recipes.</p>
			  <a href="view.php" class="btn"><i class="bx bx-arrow-to-right"></i></a>
			  </div>
            <div class="icon-box mt-5">
              <h4>Update Recipe Database</h4>
              <p>Update your recipe database.</p>
			  <a href="update.php" class="btn"><i class="bx bx-arrow-to-right"></i></a>
            </div>
            <div class="icon-box mt-5">
              <h4>Delete Recipe From Database</h4>
              <p>Delete recipe from the database.</p>
			  <a href="delete.php" class="btn"><i class="bx bx-arrow-to-right"></i></a>
            </div>
			</div>
			
			</div>
  
  
  </div>
  
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span style="color: blue;">I</span>M</strong>. All Rights Reserved
        </div>
        <div class="credits">
           Designed by <a href="#">Group15</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>