      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Certificate List</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 60px;">ID</th>
                          <th class="text-center">Certificate</th>
                          <th class="text-center">Assigned At</th>
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
                          <td class="text-center"><?= $certificate->event_name ?></td>
                          <?php
                        }
                        ?>
                        <?php
                        foreach($generate as $generate){
                        ?>
                          <td class="text-center"><?= $generate->assigned_at ?></td>
                          <td class="text-center">
                            <label class="badge badge-warning" style="margin-right: 3px;"><a class="text-warning" style="text-decoration: none;" target="_blank" href="<?= base_url('download/' . $generate->assignment_id) ?>">Download</a></label</td>
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