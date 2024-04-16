      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Event Table</h4>
                  <p class="card-description">
                    <button type="button" class="badge badge-primary text-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Event
                  </button>
                  <?= $this->session->flashdata('pesan'); ?>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 60px;">ID</th>
                          <th class="text-center">Event Name</th>
                          <th class="text-center">Event Date</th>
                          <th class="text-center">Location</th>
                          <th class="text-center">Organizer</th>
                          <th class="text-center">Created At</th>
                          <th class="text-center" style="width: 140px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach($event as $event){
                        ?>
                        <tr>
                          <td class="text-center"><?= $no++ ?></td>
                          <td class="text-center"><?= $event->event_name ?></td>
                          <td class="text-center"><?= $event->event_date ?></td>
                          <td class="text-center"><?= $event->location ?></td>
                          <td class="text-center"><?= $event->organizer ?></td>
                          <td class="text-center"><?= $event->created_at ?></td>
                          <td class="text-center"><label class="badge badge-info" style="margin-right: 3px;"><a class="text-info" style="text-decoration: none;" href="<?= base_url('admin/edit_event/' . $event->event_id) ?>">Edit</a></label><label class="badge badge-danger" style="margin-left: 3px;"><a class="text-danger" style="text-decoration: none;" href="<?= base_url('admin/C_Event/fungsi_hapus/' . $event->event_id) ?>">Delete</a></label></td>
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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/C_Event/fungsi_tambah') ?>" method="post">
              <div class="modal-body">
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Event Name</label>
                        <input type="text" class="form-control" id="inputAddress" name="event_name" placeholder="Event Name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" placeholder="Event Date">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Location</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="location" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Organizer</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="organizer" placeholder="Organizer">
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