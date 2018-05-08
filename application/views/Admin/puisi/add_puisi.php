 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center;">TAMBAHKAN PUISI</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_puisi/save'); ?>" method="POST" enctype="multipart/form-data">
                <label>Judul Puisi</label>
                <input type="text" name="judul_puisi" placeholder="Judul" class="form-control">
                <label>Gambar</label>
                <input type="file" name="gambar_puisi" class="form-control">
                <label>Puisi</label>
                <textarea class="form-control" name="isi_puisi" placeholder="Deskripsi puisi" rows="12
                "></textarea>
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