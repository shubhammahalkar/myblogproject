<!DOCTYPE html>
<html>
<head>
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/fontawesome-free/css/all.min.css'
  ); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'
  ); ?>">
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/tempusdominus-bootstrap-4/css/bootstrapcards.min.css'
  ); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/icheck-bootstrap/icheck-bootstrap.min.css'
  ); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/jqvmap/jqvmap.min.css'
  ); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(
      'dist/css/adminlte.min.css'
  ); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/overlayScrollbars/css/OverlayScrollbars.min.css'
  ); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/daterangepicker/daterangepicker.css'
  ); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/summernote/summernote-bs4.css'
  ); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'
  ); ?>">
  <link rel="stylesheet" href="<?php echo base_url(
      'plugins/datatables-responsive/css/responsive.bootstrap4.min.css'
  ); ?>">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

   
     
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-gray">
            <!-- Brand Logo -->
           

            <!-- Sidebar -->
            <div class="sidebar color-white">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="<?php echo base_url(
                            'Dashboard/index'
                        ); ?>" class="d-block" style="color:#fff"> <?php
$user_id = $this->session->userdata('username');
echo $user_id;
?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url(
                                'Welcome/index'
                            ); ?>"><i
                                    class="fas fa-home fa-fw mr-2"></i>Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <?php if (
                                empty($this->session->userdata('logged_in'))
                            ) {
                                $session_data = ['logged_in' => false];
                                $this->session->set_userdata($session_data);
                                echo '<a class="nav-link text-white" href="';
                                echo base_url('Auth/login');
                                echo '"> <i
                                class="fas fa-sign-in-alt fa-fw mr-2"></i>LOGIN<span class="sr-only"></span>
              
                                </a>';
                            } ?>
                        </li >
                        <li class="nav-item">
                        <?php if (
                            empty($this->session->userdata('logged_in'))
                        ) {
                            $session_data = ['logged_in' => false];
                            $this->session->set_userdata($session_data);
                            echo '<a class="nav-link text-white" href="';
                            echo base_url('Auth/register');
                            echo '"><i
                                class="fas fa-user-plus fa-fw mr-2"></i>REGISTER<span class="sr-only"></span>
              
              </a>';
                        } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (
                                empty($this->session->userdata('logged_in'))
                            ) {
                            } else {
                                $user_id = $this->session->userdata('id');
                                echo '<a class="text-white" style="text-decoration: none;" href="';
                                echo base_url('Blog/add');
                                echo '"><i
                                class="fas fa-plus fa-fw mr-2"></i>ADD Post<span class="sr-only"></span></a>';
                            } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (
                                empty($this->session->userdata('logged_in'))
                            ) {
                                $session_data = ['logged_in' => false];
                                $this->session->set_userdata($session_data);
                            } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (
                                empty($this->session->userdata('logged_in'))
                            ) {
                            } else {
                                $user_id = $this->session->userdata('id');

                                echo '<a class="text-white" style="text-decoration: none;" href="';
                                echo base_url('Blog/userindex');
                                echo '"><i
                                class="fas fa-user fa-fw mr-2"></i>MY BLOGS<span class="sr-only"></span></a>';
                            } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (
                                empty($this->session->userdata('logged_in'))
                            ) {
                                $session_data = ['logged_in' => false];
                                $this->session->set_userdata($session_data);
                            } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (
                                empty($this->session->userdata('logged_in'))
                            ) {
                            } else {
                                $user_id = $this->session->userdata('id');

                                echo '<a class="text-white" style="text-decoration: none;" href="';
                                echo base_url('Auth/logout');
                                echo '"><i
                                class="fas fa-sign-out-alt fa-fw mr-2"></i>LOGOUT<span class="sr-only"></span></a>';
                            } ?>
                        </li>


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>
</body>
      
</html>

