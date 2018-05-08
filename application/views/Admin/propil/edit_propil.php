 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Propil</h4>
                  <form class="forms-sample" action="<?php echo base_url('index.php/Admin_propil/update'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Lengkap</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Depan" name="user_fullname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Tempat Lahir</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" name="user_tmp_lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Email" name="user_tgl_lahir">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="user_email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Kelas</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Kelas" name="user_kelas">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="user_photo" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info"  placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">No Telp.</label>
                      <input type="number" class="form-control" id="exampleInputCity1" placeholder="No Telpon" name="user_no_telpon">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="2" placeholder="Alamat"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">EDIT</button>
                    <button class="btn btn-light">BATAL</button>
                  </form>
                </div>
              </div>
            </div>
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Akun</h4>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent"><i class="mdi mdi mdi-menu text-white "></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon1" name="user_username">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent"><i class="mdi mdi-shield-outline text-white"></i></span>
                          </div>
                          <input type="password" class="form-control" placeholder="Password" aria-label="Username" name="user_password" aria-describedby="colored-addon2">
                        </div> <br><br>
                        <button class="btn btn-info" style="margin-left: 300px;">UPDATE</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->