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