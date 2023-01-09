<?php
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/mystyle.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Feed</title>
  <!-- <link href="../feed/css/mystyle.css" rel="stylesheet" type="text/css" /> -->
</head>
<body>
  	<div class="container">
      <div class="bg-hero">
        <div class="p-4 p-md-5 mb-4 rounded">
          <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Your Roadtrip!</h1>
            <p class="lead my-3">Explore the open road with us: Share your favorite road trip routes on our site!.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
          </div>
        </div>    
      </div>
      <?php
if($_SESSION["loginStatus"] = FALSE){
  echo "niet ingelogd";
} else{
  echo "wel ingelogd";
}
      ?>
    </div>
    <p class="error">hehehe</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- <style>*{background-color: black;}</style> -->
  </body>
</html>