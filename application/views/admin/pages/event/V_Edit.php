<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Event</h4>
                  <p class="card-description">
                  </p>
                  <form action="<?= base_url('admin/C_Event/fungsi_edit') ?>" method="post" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Event Name</label>
                      <input type="hidden" class="form-control" id="exampleInputUsername1" name="event_id" value="<?= $event->event_id ?>" placeholder="" readonly>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="event_name" value="<?= $event->event_name ?>" placeholder="Event Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Event Date</label>
                      <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" value="<?= $event->event_date ?>" placeholder="Event Date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Location</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="location" value="<?= $event->location ?>" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Organizer</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="organizer" value="<?= $event->organizer ?>" placeholder="Organizer">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="<?= base_url('admin/event') ?>" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->