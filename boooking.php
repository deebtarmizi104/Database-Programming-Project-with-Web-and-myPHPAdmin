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
    <title>Movie Database</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
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
    h2{
      display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: 40px;
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

    .data-table{
      margin-left: auto;
      margin-right: auto;
      font-family: 'Roboto', sans-serif;
      text-align: center;
    }
    </style>


</head>

<body>
    <!-- Start Main Top -->
      <header class="main-header">
          <!-- Start Navigation -->
                <div class="sidenav">
                          <img src="dp.png" alt="Avatar">
                          <br>
                          <p align=center style="color:black">admin1234@moviesystem</p>
                          <br>
                          <br>
                          <li class="nav-item"><a class="nav-link" href="AdminDashboard.php">Dashboard</a></li>
                          <li class="nav-item"><a class="nav-link" href="customer.php">Customer</a></li>
                          <li class="nav-item" style="background-color:#803300"><a class="nav-link" style="color:white" href="movie.php">Movie</a></li>
                          <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
                          <li class="nav-item"><a class="nav-link" href="payment.php">Payment</a></li>
                </div>
          <!-- End Navigation -->

          <div class="main">
              <h1>Movie Ticketing System</h1>
              <h2>Movie Database</h2>
          </div>
      </header>

    <!-- End Main Top -->

    <!-- Start Shop Page  --><br><br>
      <div id="div" style="text-align: center;" >
              <table class='data-table' style='border: solid 1px black;'>
              <?php
              echo "<tr><th>movie_ID</th><th>Movie Name</th><th>Movie Language</th><th>Release Date</th><th>Director Name</th></tr>";
              $sql = "SELECT * FROM Movie;";
              $result = mysqli_query($connect, $sql);

              while($row = mysqli_fetch_assoc($result))
              {
                  echo "<tr><td>{$row["movie_id"]}</td><td>{$row["movie_name"]}</td><td>{$row["movie_language"]}</td>
                  <td>{$row["release_date"]}</td><td>{$row["director_name"]}</td></tr>";
              }

              ?>
              </table>
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
