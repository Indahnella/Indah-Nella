 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center;">TAMBAHKAN INFORMASI</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_informasi/save'); ?>" method="POST" enctype="multipart/form-data">
                <label>Pilih Gambar</label>
                <input type="file" name="gambar_info" class="form-control">
                <label>Judul Cerpen</label>
                <input type="text" name="judul_info" placeholder="Judul" class="form-control">
                <label>Deskripsi Cerpen</label>
                <textarea class="form-control" name="isi_info" placeholder="Deskripsi Informasi" rows="12"></textarea>
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 720px;">SIMPAN</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->