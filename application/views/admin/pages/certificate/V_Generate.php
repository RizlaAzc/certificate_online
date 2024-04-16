      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Generate Table</h4>
                  <p class="card-description">
                    <button type="button" class="badge badge-primary text-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Generate
                  </button>
                  <?= $this->session->flashdata('pesan'); ?>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 60px;">ID</th>
                          <th class="text-center">Certificate ID</th>
                          <th class="text-center">User ID</th>
                          <th class="text-center">Event ID</th>
                          <th class="text-center">Assigned At</th>
                          <th class="text-center" style="width: 140px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach($generate as $generate){
                        ?>
                        <tr>
                          <td class="text-center"><?= $no++ ?></td>
                          <td class="text-center"><?= $generate->certificate_id ?></td>
                          <td class="text-center"><?= $generate->user_id ?></td>
                          <td class="text-center"><?= $generate->event_id ?></td>
                          <td class="text-center"><?= $generate->assigned_at ?></td>
                          <td class="text-center">
                            <label class="badge badge-warning" style="margin-right: 3px;"><a class="text-warning" style="text-decoration: none;" href="<?= base_url('admin/download/' . $generate->assignment_id) ?>">Download</a></label><!-- <label class="badge badge-info" style="margin: 3px;"><a class="text-info" style="text-decoration: none;" href="<?= base_url('edit_generate/' . $generate->assignment_id) ?>">Edit</a></label> --><label class="badge badge-danger" style="margin-left: 3px;"><a class="text-danger" style="text-decoration: none;" href="<?= base_url('admin/C_Generate/fungsi_hapus/' . $generate->assignment_id) ?>">Delete</a></label></td>
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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Generate</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/C_Generate/fungsi_tambah') ?>" method="post">
              <div class="modal-body">
                    <div class="form-group">
                      <label for="inputAddress" class="form-label">Certificate ID</label>
                      <select class="form-control" id="cars" name="certificate_id">
                        <option selected="true" disabled="disabled">Choose Certificate</option>
                        <?php
                          foreach($certificate as $certificate){
                        ?>
                        <option value="<?= $certificate->certificate_id ?>"><?= $certificate->event_name ?></option>
                        <?php
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2" class="form-label">User ID</label>
                      <select class="form-control" id="cars" name="user_id">
                        <option selected="true" disabled="disabled">Choose User</option>
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
                      <label for="inputAddress2" class="form-label">Event ID</label>
                      <select class="form-control" id="cars" name="event_id">
                        <option selected="true" disabled="disabled">Choose Certificate</option>
                        <?php
                          foreach($event as $event){
                        ?>
                        <option value="<?= $event->event_id ?>"><?= $event->event_name ?></option>
                        <?php
                          }
                        ?>
                      </select>
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