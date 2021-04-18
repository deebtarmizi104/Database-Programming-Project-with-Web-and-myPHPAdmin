<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "moviesystem";

 // $cid = "";
 // $fname = "";
 // $lname = "";
 // $email = "";
 // $phoneno = "";
 // $membership = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Payment Database</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

  body, html {
    height: 100%;
    line-height: 1.8;
  }

    /* Full height image header*/
    .bgimg-1 {
      background-position: center;
      background-size: cover;
      background-image: url("img1.jpg");
      min-height: 100%;
    }

    .w3-bar .w3-button {
      padding: 16px;
    }
    </style>


</head>

<body style="background-color:#c4d4cc;">
    <!-- Start Main Top -->
      <header class="main-header">
          <!-- Start Navigation -->
          <!-- Navbar (sit on top) -->
      <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
          <a href="index.php" class="w3-bar-item w3-button w3-wide">MOVIE TICKET SYSTEM</a>
          <!-- Right-sided navbar links -->
          <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
            <a href="customer.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> CUSTOMER</a>
            <a href="movie.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> MOVIE</a>
            <a href="booking.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOKING</a>
            <a href="payment.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> PAYMENT</a>
          </div>

      </header>

    <!-- End Main Top -->
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
<a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">CUSTOMER</a>
<a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">MOVIE</a>
<a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">BOOKING</a>
<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">PAYMENT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
<div class="w3-display-top w3-text-white w3-center" style="padding:48px">
<span class="w3-jumbo w3-hide-small ">Movie Ticketing Database</span><br>
</div>

<h3 class="w3-center">PAYMENTS</h3>
    <!-- Start Shop Page  --><br><br>
      <div id="div" style="text-align: center;" >
              <table class='data-table' style='border: solid 1px black;'align="center">
              <?php
              echo "<tr><th>Payment ID</th><th>Booking ID</th><th>Email Address</th><th>Movie Name</th><th>Total</th><th>Status</th><th>Method</th></tr>";
              $sql = "SELECT * FROM Payment;";
              $result = mysqli_query($connect, $sql);

              while($row = mysqli_fetch_assoc($result))
              {
                  echo "<tr><td>{$row["payment_ID"]}</td><td>{$row["booking_ID"]}</td><td>{$row["email"]}</td>
                  <td>{$row["movie_name"]}</td><td>{$row["total"]}</td><td>{$row["status"]}</td><td>{$row["method"]}</td></tr>";
              }

              ?>
              </table>
              <br>
              <button class="button"><a class="nav-link" href="payment-search.php">Search Payment</a></button>
              <button class="button"><a class="nav-link" href="payment-insert.php">Insert New Payment</a></button>
              <button class="button"><a class="nav-link" href="payment-update.php">Update Payment Info</a></button>
              <button class="button"><a class="nav-link" href="payment-delete.php">Delete Payment Info</a></button>
              <button class="button"><a class="nav-link" href="payment-discount.php">Payment Discount Info</a></button>
              <button class="button"><a class="nav-link" href="payment-charge.php">Payment Charge Info</a></button>
              <br><br>
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
