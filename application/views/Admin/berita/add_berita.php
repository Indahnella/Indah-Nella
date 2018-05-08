 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center; ">TAMBAHKAN BERITA</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_berita/save'); ?>" method="POST" enctype="multipart/form-data">
                <label>Pilih Gambar</label>
                <input type="file" name="gambar_berita" class="form-control"> <br>
                <label>Judul Berita</label>
                <input type="text" name="judul_berita" placeholder="Judul" class="form-control"> <br>
                <label>Deskripsi Berita</label>
                <textarea class="form-control" name="isi_berita" placeholder="Deskripsi Berita" rows="10"></textarea>
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 770px;">SIMPAN</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->