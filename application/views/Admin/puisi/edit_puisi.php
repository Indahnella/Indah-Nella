      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center;">EDIT PUISI</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_puisi/update'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $query->puisi_id; ?>">
                <label>Judul Puisi</label>
                <input type="text" name="judul_puisi" placeholder="Judul" class="form-control" value="<?php echo $query->judul_puisi; ?>">
                <label>Gambar</label>
                <input type="file" name="gambar_puisi" class="form-control">
                <label>Puisi</label>
                <textarea class="form-control" name="isi_puisi" placeholder="Deskripsi puisi" rows="12
                "><?php echo $query->isi_puisi; ?></textarea>
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