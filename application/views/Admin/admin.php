
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome Administator</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin/font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- tables -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/DataTables/css/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/DataTables/css/dataTables.bootstrap.css">

  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>admin/images/favicon.png" />
  <style type="text/css">
    .sidebar{
      background: url('<?php echo base_url('admin/images/auth/login_1.jpg'); ?>');
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <i style="font-size: 40px; font-family: chiller;">Jurnalis_Nesas</i>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left">Welcome Admin</ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <input type="text" class="form-control" name="cari" placeholder="Search..">
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="<?php echo base_url().'index.php/Chat' ?>" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-variant"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Pesan Masuk <button class="btn btn-danger"><a href="<?php echo base_url().'index.php/Chat' ?>" style="color: white; text-decoration: none;">view all</a></button></p>
              </div>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="<?php echo base_url().'Login/logout' ?>"><i class="fa fa-sign-out fa-rotate-90"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="<?php echo base_url() ?>admin/images/IMG_20171022_090121.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <?php 
          $home=$this->db->get('user');
          foreach ($home->result() as $in) {
            ?>
                <p class="name" style="font-size: 15px;"><?php echo $in->user_level; ?></p>
                <p class="designation" style="font-size: 20px; color: black"><?php echo $in->user_fullname; ?></p>
 <?php
          }
           ?>
              </div>
            </div>
          </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Administrator') ?>"><span class="menu-title"><i class="fa fa-dashboard"> DASHBOARD</i></span></a>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"><span class="menu-title"><i class="fa fa-user-circle"> PROPIL</i></span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('index.php/Admin_propil/edit')?>"><i class="fa fa-user"> EDIT PROPIL</i></a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_member' ?>"><span class="menu-title"><i class="fa fa-users"> ANGGOTA</i></span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_artikel' ?>"><span class="menu-title"><i class="fa fa-map"> ARTIKEL</i></span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_berita' ?>"><span class="menu-title"><i class="fa fa-newspaper-o"> BERITA</i></span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_cerpen' ?>"><span class="menu-title"><i class="fa fa-book"> CERPEN</i></span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_galleri' ?>"><span class="menu-title"><i class="fa fa-image"> GALERI</i></span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_informasi' ?>"><span class="menu-title"><i class="fa fa-home"> INFORMASI SEKOLAH</i></span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_puisi' ?>"><span class="menu-title"><i class="fa fa-paste"> PUISI</i></span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_motivasi' ?>"><span class="menu-title"><i class="fa fa-thumbs-o-up"> MOTIVASI</i></span></a></li>
        </ul>
      </nav>
      <!-- partial -->
               <?php
               $data['query']= isset($query) ? $query : [];
                $this->load->view($content,$data); ?>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url() ?>admin/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>admin/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url() ?>admin/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url() ?>admin/node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url() ?>admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url()?>admin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url() ?>admin/js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="<?php echo base_url() ?>admin/js/maps.js"></script>
  <!-- End custom js for this page-->
  <!-- Data tables -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url() ?>assets/DataTables/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/DataTables/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/DataTables/js/dataTables.bootstrap.js"></script>


</body>

</html>