 <style type="text/css">
   .tengah{
    margin-top: 100px;
    font-size: 50px;
    color: white;
   }
 .content-wrapper{
  background : url('<?php echo base_url('admin/images/auth/01.jpg'); ?>');
  background-attachment: fixed;
  background-size: cover;
 }
 </style>
 <body>
 <div class="main-panel">
        <div class="content-wrapper">

          <?php 
          $home=$this->db->get('user');
          foreach ($home->result() as $in) {
            ?>
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-flex alifn-items-center">
                <center><?php echo $in->user_level; ?></center>
              </span>
              <br>
              <div class="tengah">
              <center>
              Selamat Datang<br>
              <b>*_<?php echo $in->user_fullname; ?>_*</b>
              </center>
              </div>
            </div>
          </div>  

          <?php
          }
           ?>
          
              </div>
            </div>
          </body>