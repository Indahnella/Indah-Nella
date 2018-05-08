 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center;">EDIT CERPEN</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_cerpen/update'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $query->cerpen_id; ?>">
                <label>Pilih Gambar</label>
                <input type="file" name="gambar_cerpen" class="form-control">
                <label>Judul Cerpen</label>
                <input type="text" name="judul_cerpen" placeholder="Judul" value="<?php echo $query->judul_cerpen; ?>" class="form-control">
                <label>Deskripsi Cerpen</label>
                <textarea class="form-control" name="isi_cerpen" placeholder="Deskripsi Cerpen" rows="12"><?php echo $query->isi_cerpen; ?></textarea>
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