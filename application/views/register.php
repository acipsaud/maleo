<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="logo">
              </div>
              <h4>Registrasi User</h4>
              <center><h4>
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
              </h4></center>
              <?php
                //create form
                // $attributes = array('action' => site_url('register/add'),'class' => 'pt-3','id' => 'FormRegister', 'method' => "post", "autocomplete" => "off");
                // echo form_open('', $attributes);
              ?>
              <!-- <form class="pt-3" action="" method="post"> -->
              <form class="pt-3" role="form" method="POST" action="<?php echo site_url('register/add') ?>">
                <div class="form-group">
                  Username 
                  <input type="text" class="form-control" value=" <?= set_value('username'); ?>" id="username" name="username" placeholder="Username">
                  <small class="text-danger">
                    <?php echo form_error('username') ?>
                  </small>
                </div>
                <div class="form-group">
                  Password 
                  <input type="password" class="form-control" value=" <?= set_value('password'); ?>" id="password" name="password" placeholder="password">
                  <small class="text-danger">
                    <?php echo form_error('password') ?>
                  </small>
                </div>
                <div class="form-group">
                  Nama Lengkap 
                  <input type="text" class="form-control" value=" <?= set_value('nama_lengkap'); ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                  <small class="text-danger">
                    <?php echo form_error('nama_lengkap') ?>
                  </small>
                </div>
                <div class="form-group">
                  Teritory
                  <select class="js-example-basic-single w-100" id="teritory" name="teritory" placeholder="teritory">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="AM">America</option>
                    <option value="CA">Canada</option>
                    <option value="RU">Russia</option>
                  </select>
                  
                  <small class="text-danger">
                    <?php echo form_error('teritory') ?>
                  </small>
                </div>
                <div class="form-group">
                  Lokasi Kerja
                  <select class="js-example-basic-single w-100" id="loker" name="loker" placeholder="loker">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="AM">America</option>
                    <option value="CA">Canada</option>
                    <option value="RU">Russia</option>
                  </select>
                  <small class="text-danger">
                    <?php echo form_error('loker') ?>
                  </small>
                </div>
                <div class="form-group">
                  No Telpon
                  <input type="text" class="form-control" value=" <?= set_value('no_telp'); ?>" id="no_telp" name="no_telp" placeholder="no_telp">
                  <small class="text-danger">
                    <?php echo form_error('no_telp') ?>
                  </small>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-facebook auth-form-btn">
                    Sign Up
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?php echo site_url('auth/login'); ?>" class="text-primary">Login</a>
                </div>
              </form>
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
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url(); ?>assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/template.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/js/file-upload.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/typeahead.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
