
    <!-- // session_start();
    // define('PROJECT_ROOT_PATH', __DIR__);
    // require_once (PROJECT_ROOT_PATH . '/../logout/index.php'); -->

<!-- separate file for the header nav bar -->
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="20"> -->
    <link rel="stylesheet" href="" type="text/css">
    <link rel="icon" type="image/x-icon" href="">
    
    <!-- Some information about the website -->
    <meta name="keywords" content=" 2">
    <meta name="description" content="">
    <meta name="author" content="Jos Roskam, The Netherlands">

      <!-- Vendor CSS Files -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="public/css/mystyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="php-restapi-starter/app/views/feed/mystyle.css"> -->
        <link href="php-restapi-starter/app/views/feed/mystyle.css" rel="stylesheet" type="text/css" />

    
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome
          <?php
                    // Check if the user is already logged in, if yes then show first name
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        // echo $_SESSION["firstname"];
                    }
                ?>
          </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="/feed">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myroutes">My routes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user">Account</a>
        </li>
        <li class="nav-item">
            <?php
                if ($_SESSION["loggedin"] = true)
                {
                    ?>
                        <a class="nav-link" href="/feed?hello=true">Log out</a>
                    <?php
                }
                else
                {
                    ?>
                        <a class="nav-link" href="login">Log in</a>
                    <?php                       
                }
            ?>            
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>