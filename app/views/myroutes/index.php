<?php
  require_once __DIR__ . '../../components/head.php';
  require_once __DIR__ . '../../components/header.php';
?>
    <div id="my-modal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Save your route</h2>
        </div>
        <div class="modal-body">
          <p>Almost done, please give your route a nice title and description!</p>
          <form method="POST" name="routeForm">
            <div class="row">
              <div class="col-12 col-sm-2">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Title:</label>
              </div>
              <div class="col-12 col-md-7">
                <div class="form-group mb-2">
                  <input type="text" class="form-control" name="title" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-2">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Description:</label>
              </div>
              <div class="col-12 col-md-7">
                <div class="form-group mb-2">
                  <input type="textarea" rows="4" cols="50" class="form-control" name="description" />
                </div>
              </div>
              <div class="col-12 col-md-2">
                <div class="form-group mb-2">
                  <button class="btn btn-primary" type="button" value="Submit" name="submitNewRoute"
                    id="myBtn">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <!-- <h3>Modal Footer</h3> -->
        </div>
      </div>
    </div>
    <div class="row mb-2">
      <div class="alert alert-success" role="alert" id="alertBox" style="display:none">
        <p id="alertParagraph"></p>
      </div>
      <div class="col-12 col-lg-8">
        <h1 id="hheader">New route</h1>
        <p>Set the marker to your destination and press the button to add destination to your route</p>
        <div id="map"></div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="row">
          <h1>Destination details</h1>
          <form class="row g-3">
            <div class="col-4">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Address</label>
            </div>
            <div class="col-8">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAddress" readonly>
              </div>
            </div>
            <div class="col-4">
              <label for="colFormLabel" class="col-sm-2 col-form-label">City</label>
            </div>
            <div class="col-8">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCity" readonly>
              </div>
            </div>
            <div class="col-4">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Country</label>
            </div>
            <div class="col-8">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCountry" readonly>
              </div>
            </div>
            <div class="col-4">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Longitute</label>
            </div>
            <div class="col-8">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLongitude" value="" readonly>
              </div>
            </div>
            <div class="col-4">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Latitude</label>
            </div>
            <div class="col-8">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLatitude" value="" readonly>
              </div> <br>
              <button type="button" class="btn btn-outline-success" onclick="addRow()">Add destination</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    <div class="row mb-2">
      <table class="table caption-top" id="tablecomposedroute">
        <caption><strong>Your current composed route:</strong></caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Longitude</th>
            <th scope="col">Latitude</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <button type="button" class="btn btn-success" onclick="openModal()">Save route</button>
    </div>
  <footer>
    <?php
      require_once __DIR__ . '../../components/footer.php';
          ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
      <script src="/js/myroutes.js"></script>