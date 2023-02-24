<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="20"> -->
    <link rel="stylesheet" href="/css/mystyle.css" type="text/css">
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

    <link rel="stylesheet" src="mystyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="php-restapi-starter/app/views/feed/mystyle.css" rel="stylesheet" type="text/css" />    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">YourRoadtrip.net</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="/">FEED</a>
        </li>
        <?php
          if(isset($_SESSION["firstname"])){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="/myroutes">My routes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user">Account</a>
        </li>
        <?php
        }?>
        </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">      
        <?php
          if(isset($_SESSION["firstname"])){
            ?>
              <li class="nav-item"><a class="nav-link"><?php echo $_SESSION["firstname"]?></a></li>
              <li class="nav-item"><a class="nav-link" href="/logout">LOGOUT</a></li>
            <?php
          } 
          else
          {
            ?>
              <li class="nav-item"><a class="nav-link" href="/login">SIGN UP</a></li>
              <li class="nav-item"><a class="nav-link" href="/login">LOGIN</a></li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
</html>