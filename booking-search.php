<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "moviesystem";

$bid = "";
$name = "";
$mdate = "";
$seat_no = "";
$hall = "";
$mname = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

function getDirName()
{
    $posts = array();
    $posts[0] = $_POST['mname'];

    return $posts;
}

// Search

if(isset($_POST['searchBooking']))
{
    $data = getDirName();

    $search_Query = "SELECT booking_ID, Concat(fname, ' ', lname) AS Name, movie_date, seat_no, hall
                     FROM Booking JOIN Customer
                     ON Booking.cust_ID = Customer.cust_ID
                     WHERE movie_name ='$data[0]' ";

    $search_Result = mysqli_query($connect, $search_Query);

    echo "<table class='data-table' style='border: solid 1px black;' align='center'>";
    echo "<tr><th>Booking ID</th><th>Name</th><th>Movie Date</th><th>Seat No</th><th>Hall</th></tr>";

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
              $bid = $row['booking_ID'];
              $name = $row['Name'];
              $mdate = $row['movie_date'];
              $seat_no = $row['seat_no'];
              $hall = $row['hall'];

              echo nl2br ("<tr><td>{$bid}</td><td>{$name}</td><td>{$mdate}</td>
              <td>{$seat_no}</td><td>{$hall}</td></tr>");
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
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
    <title>Search Booking</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
      height: 100%;
      line-height: 1.8;
    }


    .w3-bar .w3-button {
      padding: 16px;
    }
    </style>


</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">

    </header>
    <!-- End Main Top -->
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
              <a href="payment.php" class="w3-bar-item w3-button"> PAYMENT</a>
            </div>

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ??</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="customer.php" onclick="w3_close()" class="w3-bar-item w3-button">CUSTOMER</a>
        <a href="movie.php" onclick="w3_close()" class="w3-bar-item w3-button">MOVIE</a>
        <a href="booking.php" onclick="w3_close()" class="w3-bar-item w3-button">BOOKING</a>
        <a href="payment.php" onclick="w3_close()" class="w3-bar-item w3-button">PAYMENT</a>
        </nav>

    <!-- Start Shop Page  --><br><br><br>
      <div id="div 1" style="text-align: center;" >
            <p>Search for Booking by Movie Name</p>
            <form action="booking-search.php" method="post">
              <input type="text" name="mname" placeholder="Enter movie name" value="<?php echo $mname;?>"><br><br>
              <br>

                <div>
                    <div class="submit-button text-center">
                      <input type="submit" name="searchBooking" value="Search">
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
        </div>
        </div>


    <button class="w3-button w3-white"><a class="nav-link" href="index.php">Return to Dashboard</a></button>
    <button class="w3-button w3-white"><a class="nav-link" href="customer.php">Return to Customer Info</a></button>

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
