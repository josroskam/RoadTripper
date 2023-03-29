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