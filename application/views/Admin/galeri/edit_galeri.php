 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center;">EDIT GALERY</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/Admin_galleri/update'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $query->gambar_id; ?>">
                <label>Pilih Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <label>Judul Cerpen</label>
                <input type="text" value="<?php echo $query->ket; ?>" name="ket" placeholder="keterangan gambar" class="form-control">
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 720px;">UPDATE</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->