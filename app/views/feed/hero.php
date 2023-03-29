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