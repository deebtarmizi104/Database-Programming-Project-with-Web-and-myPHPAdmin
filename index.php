<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Dashboard</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
.button {
  background-color: #009999;
  border: none;
  width: 300px;
  height: 150px;
  color: #001a1a;
  padding: 16px 32px;
  text-align: center;
  font-size: 30px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  align-items: center;

}

.button:hover {opacity: 1}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #e9b37c;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.nav-item active:{
  color: #803300;
}
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

h1{
  display: block;
  margin-left: auto;
  margin-right: auto;
  font-size: 60px;
  font-family: 'Yusei Magic', sans-serif;
  text-align: center;
}

img {
  border-radius: 50%;
  width: 60%;
  height: 15%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

</head>

<body style="background-color:#c4d4cc;">
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
              <div class="sidenav">
                        <img src="dp.png" alt="Avatar">
                        <br>
                        <p align=center style="color:black">admin1234@moviesystem</p>
                        <br>
                        <br>
                        <li class="nav-item active" style="background-color:#803300"><a class="nav-link"  style="color:white" href="AdminDashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="customer.php">Customer</a></li>
                        <li class="nav-item"><a class="nav-link" href="movie.php">Movie</a></li>
                        <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
                        <li class="nav-item"><a class="nav-link" href="payment.php">Payment</a></li>
              </div>
        <!-- End Navigation -->

        <div class="main">
            <h1>Movie Ticketing System</h1>
        </div>
    </header>
    <!-- End Main Top -->

    <!-- Start Shop Page  --><br><br><br>
      <div class="menu" style="text-align: center;" >
                <button class="button"><a class="nav-link" href="customer.php">Customer Info</a></button>
                <button class="button"><a class="nav-link" href="movie.php">Movie Info</a></button>
                <br>
                <br>
                <button class="button"><a class="nav-link" href="booking.php">Booking Info</a></button>
                <button class="button"><a class="nav-link" href="payment.php">Payment Info</a></button>

        </div>
        </div>
    <!-- End Shop Page -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
