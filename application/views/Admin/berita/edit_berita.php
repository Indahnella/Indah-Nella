      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center; ">EDIT BERITA</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_berita/update'); ?>" method="POST" enctype="multipart/form-data">
                <label>Pilih Gambar</label>
                <input type="hidden" name="id" value="<?php echo $query->berita_id; ?>">
                <input type="file" name="gambar_berita" class="form-control"> <br>
                <label>Judul Berita</label>
                <input type="text" name="judul_berita" placeholder="Judul" class="form-control" value="<?php echo $query->judul_berita; ?>"> <br>
                <label>Deskripsi Berita</label>
                <textarea class="form-control" name="isi_berita" placeholder="Deskripsi Berita" rows="10"><?php echo $query->isi_berita; ?></textarea>
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 770px;">UPDATE</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>