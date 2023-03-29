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