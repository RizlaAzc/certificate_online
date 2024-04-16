      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Certificate Table</h4>
                  <p class="card-description">
                    <button type="button" class="badge badge-primary text-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Certificate
                  </button>
                  <?= $this->session->flashdata('pesan'); ?>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 60px;">ID</th>
                          <th class="text-center">Participant Name</th>
                          <th class="text-center">Event Name</th>
                          <th class="text-center">Event Date</th>
                          <th class="text-center">Certificate Text</th>
                          <th class="text-center">Created At</th>
                          <th class="text-center" style="width: 140px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach($certificate as $certificate){
                        ?>
                        <tr>
                          <td class="text-center"><?= $no++ ?></td>
                          <td class="text-center"><?= $certificate->participant_name ?></td>
                          <td class="text-center"><?= $certificate->event_name ?></td>
                          <td class="text-center"><?= $certificate->event_date ?></td>
                          <td class="text-center"><?= $certificate->certificate_text ?></td>
                          <td class="text-center"><?= $certificate->created_at ?></td>
                          <td class="text-center"><label class="badge badge-info" style="margin-right: 3px;"><a class="text-info" style="text-decoration: none;" href="<?= base_url('admin/edit_certificate/' . $certificate->certificate_id) ?>">Edit</a></label><label class="badge badge-danger" style="margin-left: 3px;"><a class="text-danger" style="text-decoration: none;" href="<?= base_url('admin/C_Certificate/fungsi_hapus/' . $certificate->certificate_id) ?>">Delete</a></label></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Certificate</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/C_Certificate/fungsi_tambah') ?>" method="post">
              <div class="modal-body">
                  <div class="form-group">
                      <label for="inputAddress2" class="form-label">Participant Name</label>
                      <select class="form-control" id="cars" name="participant_name">
                        <option selected="true" disabled="disabled">Choose Participant</option>
                        <?php
                          foreach($users as $users){
                        ?>
                        <option value="<?= $users->full_name ?>"><?= $users->full_name ?></option>
                        <?php
                          }
                        ?>
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Event Name</label>
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
                        <label for="inputAddress2" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" placeholder="Event Date">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Certificate Text</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="certificate_text" placeholder="Certificate Text">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>