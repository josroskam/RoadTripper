<?php
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/mystyle.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link href="/css/mystyle.css" rel="stylesheet" type="text/css">
  <title>Feed</title>
  <style>
    <?php include '/../../css/mystyle.css';
    ?>
  </style>
</head>

<body>
  <main class="container">
    <div class="p-4 p-md-5 mb-4 rounded hero">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Pack your backs with Your Roadtrip!</h1>
        <p class="lead my-3">Create and share your own routes with others! Take your experience from roadtripping to a
          higher level with destinations from all over the world.</p>
      </div>
    </div>

    <!-- Make a list of destinations -->
    <div class="row mb-2">
      <?php
      // if dictionary is not null
      if ($dictionary != null) {
        // get random routes
        $randomRoutes = array_rand($dictionary, 2);
        foreach ($randomRoutes as $key) {
          if (strpos($key, 'route_') === 0) {
            $value = $dictionary[$key];
            ?>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Popular route</strong>
            <h3 class="mb-0"><?= $value["route"]->getTitle() ?></h3>
            <div class="mb-1 text-muted">Posted at: <?= date("d/m/Y", strtotime($value["route"]->getPostedAt())) ?>,
              by <?= $value["route"]->getAuthorId() ?></div>
            <p class="mb-auto"><?= $value["route"]->getDescription() ?></p>
          </div>
        </div>
      </div>
      <?php
          }
  }
}
?>

    </div>
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          <?php
                if ($dictionary != null){
                  echo "Last added routes";
                } else{
                  echo "No routes found in the database, add one!";
                }

          ?>
        </h3>
        <?php
        $routeCounter = 1;
        foreach ($dictionary as $key => $value) {
          if (strpos($key, 'route_') === 0) {
            ?>
        <article class="blog-post">
          <h2 class="blog-post-title mb-1"><?php echo $value["route"]->getTitle(); ?></h2>
          <p class="blog-post-meta">Posted at: <?php echo $value["route"]->getPostedAt(); ?> by:
            <?php echo $value["route"]->getAuthorId(); ?></p>
          <p>Description: <?php echo $value["route"]->getDescription(); ?></p>
          <?php
        for ($j = 0; $j < count($value["destinations"]); $j++) {
          $destination = $value["destinations"][$j];
          ?>
          <p>Destination number: <?php echo $j + 1?><br>
            Address: <?php echo $destination->getAddress(); ?><br>
            City: <?php echo $destination->getCity(); ?><br>
            Country: <?php echo $destination->getCountry(); ?><br>
          </p>
          <?php
        }
        ?>
        </article>
        <?php
          }
        }
        $routeCounter++;
       ?>
      </div>
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 rounded">
            <h4 class="fst-italic">Add a route</h4>
            <p class="mb-0">www.yourroadtrip.net will expand and will let you experience the best routes provided by
              train! Coming up on the end of June 2023.</p><br>
            <?php
          if(isset($_SESSION["firstname"])){
            ?>
            <a href="/newroute">Check it out <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
              </svg></a>
            <?php
          } 
          else
          {
            ?>
            <a href="/login">You must login first to add a new route <svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
              </svg></a>
            <?php
          }
        ?>
          </div>
          <div class="p-4 mb-3 rounded">
            <h4 class="fst-italic">Incoming new features</h4>
            <p class="mb-0">Personalise your own route, and share it with others!</p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <?php
      // define('PROJECT_ROOT_PATH', __DIR__);
      include_once (PROJECT_ROOT_PATH . '/../footer/index.php');
    ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>