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