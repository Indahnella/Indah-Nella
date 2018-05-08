 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center;">EDIT KATA-KATA MOTIVASI</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/Admin_motivasi/update'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php $query->motivasi_id; ?>">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <label>Kata-lata Motivasi</label>
                <textarea class="form-control" name="isi_motivasi" placeholder="Deskripsi puisi" rows="12"><?php echo $query->isi_motivasi; ?></textarea>
                <label>Nama Pembuat</label>
                <input type="text" name="pembuat_motivasi" value="<?php echo $query->pembuat_motivasi; ?>" placeholder="Bye :" class="form-control">
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