 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; text-align: center; ">TAMBAHKAN ARTIKEL</label>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_artikel/save'); ?>" method="POST" enctype="multipart/form-data">
                <label>Judul Artikel</label>
                <input type="text" name="judul" placeholder="Judul" class="form-control"> <br>
                <label>Pilih Gambar</label>
                <input type="file" name="gambar_artikel" class="form-control"> <br>
                <label>Deskripsi Artikel</label>
                <textarea class="form-control" name="isi" placeholder="Deskripsi Artikel" rows="10"></textarea>
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 770px;">Simpan</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->