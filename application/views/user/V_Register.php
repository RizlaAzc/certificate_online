<div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 text-center">
              <div class="brand-logo">
                <img src="<?= base_url('assets/images/smk.png') ?>" alt="logo">
              </div>
              <h4>Certificate Online</h4>
              <h6 class="fw-light">Create an account!</h6>
              
              <form action="<?= base_url('register') ?>" method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" name="full_name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password1" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" name="password2" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN UP</button>
                </div>
              </form>
              <br>
              <h6>Already have an account ?<a href="<?= base_url('') ?>"> Click Here</a></h6>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('assets/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('assets/js/template.js') ?>"></script>
  <script src="<?= base_url('assets/js/settings.js') ?>"></script>
  <script src="<?= base_url('assets/js/todolist.js') ?>"></script>
  <!-- endinject -->
</body>

</html>
