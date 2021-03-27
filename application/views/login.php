

<!DOCTYPE html>
<html>
<head>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/fontawesome-free/css/all.min.css'
  ); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/icheck-bootstrap/icheck-bootstrap.min.css'
  ); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(
      'dist/css/adminlte.min.css'
  ); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="com-md-8">
                 <!-----flash messages--->
 <div class="container-fluid">
                <div id="mydivs">
                    <?php echo $this->session->flashdata('success'); ?>

                    <script>
                    setTimeout(function() {
                        $('#mydivs').hide('fast');
                    }, 3000);
                    </script>
                </div>
            </div>
                </div>
            <!-----flash messages end--->
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Blog</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="col-md-12">

  <div class="card">

    <div class="card-body login-card-body">
    <p class="login-box-msg">
    <a href="<?php echo base_url('welcome/index'); ?>"> <i class="fas fa-backward fa-fw mr-2"> </i> Back to Main Page  </a>
    </p>
      <p class="login-box-msg">Sign in to start your session</p>
      <?php echo form_open('Auth/login'); ?>
      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span style="color:red"><?php echo form_error('email'); ?></span>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span style="color:red"><?php echo form_error('password'); ?></span>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php echo form_close(); ?>
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a  href="<?php echo base_url(
            'Auth/register'
        ); ?>" class="text-center">Register a new user</a>
      </p>
    </div>
</div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
