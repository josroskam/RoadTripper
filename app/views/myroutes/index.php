<?php
session_start();
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
    // include '../../app/assets/img';
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
  <title>Feed</title>
  <style>
    <?php include '../../app/css/mystyle.css';
    ?>
  </style>

  <!-- Leafletjs for setting up the map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <div class="container">
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
      // define('PROJECT_ROOT_PATH', __DIR__);
      include_once (PROJECT_ROOT_PATH . '/../footer/index.php');
          ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

<script>
  var map = L.map('map').setView([52.4059712, 4.5644690498499], 11);
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

  var lat = '0';
  var lng = '0';
  // Initialize the marker
  var marker = L.marker([lat, lng]).addTo(map);

  // Listen for a click event on the map
  map.on('click', function (e) {
    // Remove the previous marker
    marker.remove();
    // Update the marker's position to the clicked location
    marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
    geojson = marker.toGeoJSON();

    $.ajax({
      type: 'GET',
      url: 'https://nominatim.openstreetmap.org/reverse?lat=' + e.latlng.lat + '&lon=' + e.latlng.lng +
        '&format=json&zoom=18&addressdetails=1',
      success: function (data) {
        // do something with the data
        if (data.address.town != null) {
          $('#inputCity').val(data.address.town);
        } else if (data.address.city != null) {
          $('#inputCity').val(data.address.city);
        } else {
          $('#inputCity').val(data.address.village);
        }
        // $('#inputCity').val(data.address.town);
        $('#inputCountry').val(data.address.country);
        var address = data.address.road + " " + data.address.house_number;
        $('#inputAddress').val(address);

        document.getElementById('inputLongitude').value = (geojson.geometry.coordinates[0]);
        document.getElementById("inputLatitude").value = (geojson.geometry.coordinates[1]);
      }
    });
  });

  var rowNumber = 1;

  function addRow() {
    if (emptyFields() == false) {
      var tableRow = document.getElementById("tablecomposedroute");
      var row = tableRow.insertRow(-1);
      row.setAttribute("id", "row-" + rowNumber);

      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);
      var cell7 = row.insertCell(6);
      cell1.innerHTML = "<b>" + rowNumber + "<b>";
      cell2.innerHTML = document.getElementById('inputAddress').value;
      cell3.innerHTML = document.getElementById('inputCity').value;
      cell4.innerHTML = document.getElementById('inputCountry').value;
      cell5.innerHTML = document.getElementById('inputLongitude').value;
      cell6.innerHTML = document.getElementById('inputLatitude').value;
      var btn = "<button class='delete-btn'>Delete</button>";
      cell7.innerHTML = btn;
      rowNumber++;
    } else {
      userRegisteredFailed("Fields can not be empty, please select a destination on the map.");
    }
  }

  $(document).on("click", ".delete-btn", function () {
    $(this).closest("tr").remove();
    updateTable();
  });

  function updateTable() {
    var rows = document.getElementById("tablecomposedroute").rows;
    for (var i = 1; i < rows.length; i++) {
      rows[i].cells[0].innerHTML = "<b>" + i + "<b>";;
    }
    rowNumber--;
  }

  // Get DOM Elements
  const modal = document.querySelector('#my-modal');
  // const modalBtn = document.querySelector('#modal-btn');
  const closeBtn = document.querySelector('.close');
  var span = document.getElementsByClassName("close")[0];

  // Events
  // modalBtn.addEventListener('click', openModal);
  // closeBtn.addEventListener('click', closeModal);
  window.addEventListener('click', outsideClick);

  // Open
  function openModal() {
    if (rowNumber > 1) {
      modal.style.display = 'block';
    } else {
      userRegisteredFailed('No route composed. Please add a destination by clicking on the map and submit the form.');
    }
  }

  // Close
  function closeModal() {
    modal.style.display = 'none';
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  // Close If Outside Click
  function outsideClick(e) {
    if (e.target == modal) {
      modal.style.display = 'none';
    }
  }

  function emptyFields() {
    var inputIds = ['inputAddress', 'inputCity', 'inputCountry', 'inputLongitude', 'inputLatitude'];
    for (var i = 0; i < inputIds.length; i++) {
      switch (inputIds[i]) {
        case 'inputAddress':
        case 'inputCity':
        case 'inputCountry':
        case 'inputLongitude':
        case 'inputLatitude':
          if (document.getElementById(inputIds[i]).value == null || document.getElementById(inputIds[i]).value == "") {
            return true;
          }
          break;
        default:
          break;
      }
    }
    return false;
  }

  var alertBox = document.getElementById('alertBox');
  var alertParagraph = document.getElementById('alertParagraph');

  function userRegisteredSuccessfully(succesMessage) {
    alertBox.className = "alert alert-success";
    alertBox.style = "display:block"
    alertParagraph.innerHTML = succesMessage;
  }

  function userRegisteredFailed(errorMessage) {
    alertBox.className = "alert alert-danger";
    alertBox.style = "display:block"
    alertParagraph.innerHTML = errorMessage;
  }

  // Get the button element with the name "submitNewRoute"
  const submitButton = document.querySelector('button[name="submitNewRoute"]');

  // Add an event listener to the button
  submitButton.addEventListener('click', function (event) {
    // Prevent the button's default behavior (preventing the page from reloading)
    event.preventDefault();

    // Get the two form elements
    const form1 = document.querySelector('form[name="routeForm"]');


    const destinations = [];
    const table = document.querySelector('#tablecomposedroute');
    var headers = {
      "Content-Type": "application/json",
      "Access-Control-Origin": "*"
    }
    // Iterate over the rows of the table
    for (let i = 1; i < table.rows.length; i++) {
      const row = table.rows[i];
      var data = {
        address: row.cells[1].innerText,
        city: row.cells[2].innerText,
        country: row.cells[3].innerText,
        longitude: row.cells[4].innerText,
        latitude: row.cells[5].innerText,
        destinationId: 0
      }

      fetch("/api/destination", {
          method: "POST",
          headers: headers,
          body: JSON.stringify(data)
        })
        .then(function (response) {
          return response.json();
        })
        .then(function (data) {
          console.log(data)
        });
    }    // Submit both forms
    form1.submit();
  });
  
</script>

</html>