<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "moviesystem";

$mid = "";
$mname = "";
$m_lang = "";
$rel_date = "";
$dirName = "";

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
    $posts[0] = $_POST['dirName'];

    return $posts;
}

// Search

if(isset($_POST['searchMovie']))
{
    $data = getDirName();

    $search_Query = "SELECT movie_name, movie_language, release_date FROM Movie WHERE director_name = '$data[0]' ";

    $search_Result = mysqli_query($connect, $search_Query);

    echo "<table class='data-table' style='border: solid 1px black;'>";
    echo "<tr><th>Movie Name</th><th>Movie Language</th><th>Release Date</th></tr>";

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $mname = $row['movie_name'];
                $m_lang = $row['movie_language'];
                $rel_date = $row['release_date'];

                echo "<tr><td>{$row["movie_name"]}</td><td>{$row["movie_language"]}</td>
                <td>{$row["release_date"]}</td></tr>";
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
    <title>Search Movie</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
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

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">

    </header>
    <!-- End Main Top -->

    <!-- Start Shop Page  --><br><br><br>
      <div id="div 1" style="text-align: center;" >
                <p>Search for Movie by Director Name</p>
                <form action="movie-search.php" method="post">
                  <input type="text" name="dirName" placeholder="Enter director name" value="<?php echo $dirName;?>"><br><br>
                  <br>

                    <div>
                        <div class="submit-button text-center">
                          <input type="submit" name="searchMovie" value="Find">
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
        </div>
        </div>


    <button class="button"><a class="nav-link" href="AdminDashboard.php">Return to Dashboard</a></button>
    <button class="button"><a class="nav-link" href="movie.php">Return to Movie Info</a></button>

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
