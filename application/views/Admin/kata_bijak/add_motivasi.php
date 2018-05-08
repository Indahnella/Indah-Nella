 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="text-align: center;">TAMBAHKAN KATA-KATA MOTIVASI</label>
                <br>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_motivasi/save'); ?>" method="POST" enctype="multipart/form-data">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <label>Isi Motivasi</label>
                <textarea class="form-control" name="isi_motivasi" placeholder="Deskripsi puisi" rows="12"></textarea>
                <label>Nama Pembuat</label>
                <input type="text" name="pembuat_motivasi" placeholder="Bye :" class="form-control">
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