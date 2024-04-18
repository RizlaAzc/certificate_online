<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Certificate</h4>
                  <p class="card-description">
                  </p>
                  <form action="<?= base_url('admin/C_Certificate/fungsi_edit') ?>" method="post" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Participant Name</label>
                      <input type="hidden" class="form-control" id="exampleInputUsername1" name="certificate_id" value="<?= $certificate->certificate_id ?>" placeholder="" readonly>
                      <select class="form-control" id="cars" name="participant_name">
                        <option selected="true" disabled="disabled">Choose Participant</option>
                        <?php
                          foreach($users as $users){
                        ?>
                        <option value="<?= $users->user_id ?>"><?= $users->full_name ?></option>
                        <?php
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Event Name</label>
                      <select class="form-control" id="cars" name="event_name">
                          <option selected="true" disabled="disabled">Choose Event</option>
                          <?php
                            foreach($event as $event){
                          ?>
                          <option value="<?= $event->event_name ?>"><?= $event->event_name ?></option>
                          <?php
                            }
                          ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Event Date</label>
                      <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" value="<?= $certificate->event_date ?>" placeholder="Event Date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Certificate Text</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="certificate_text" value="<?= $certificate->certificate_text ?>" placeholder="certificate_text">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="<?= base_url('admin/generate_certificate') ?>" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->