      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <?= form_open_multipart('C_Profile/fungsi_edit'); ?>
          <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body text-center">
                    <img src="<?= base_url('assets/images/profile/') . $profil['photo']; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <div class="form-group">
                      <label class="mt-3" for="exampleInputUsername1">Change Photo :</label>
                      <input type="file" class="form-control mb-3" id="exampleInputUsername1" name="photo" placeholder="Photo">
                      <?= $this->session->flashdata('message'); ?>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">My Profile</h4>
                    <p class="card-description">
                    </p>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="email" value="<?= $profil['email'] ?>" placeholder="Email" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="username" value="<?= $profil['username'] ?>" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="full_name" value="<?= $profil['full_name'] ?>" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="<?= $profil['photo'] ?>" placeholder="Photo" readonly>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-secondary me-2">Reset</button>
                    </div>
                  </div>
                </div>
              </div>
            <?= form_close() ?>
        </div>
        <!-- content-wrapper ends -->