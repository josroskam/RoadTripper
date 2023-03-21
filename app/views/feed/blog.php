<div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 rounded">
            <h4 class="fst-italic">Add a route</h4>
            <p class="mb-0">Personalise your own route, and share it with others.</p><br>
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
            <p class="mb-0">www.yourroadtrip.net will expand and will let you experience the best routes provided by
              train! Coming up on the end of June 2023!</p>
          </div>
        </div>
      </div>
    </div>