 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; ">INFORMASI SEKOLAH</label>
                <a href="<?php echo base_url().'index.php/Admin_informasi/tambah' ?>" class="btn btn-primary btn-md" style="width: 150px; height: 30px; margin-left: 10px;"><i class="fa fa-plus"> Add Informasi</i></a>
                <br>
                <table id="table_id" class="table table-stripped table-bordered">
                  <thead style="text-align: center;" class="table-dark">
                    <th>No.</th>
                    <th>User_id</th>
                    <th>Gambar</th>
                    <th>Judul Informasi</th>
                    <th>Data Entri</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody style="text-align: center;" class="table-primary">
                    <?php 
                    if ($query->num_rows()>0) {
                     $no=0; 
                    foreach ($query->result() as $row) {
                    $no++;
                    echo' 
                      <tr>     
                          <td>'.$no.'</td>
                          <td>'.$row->info_user_id.'</td>
                          <td><img style="width:50px; height:50px; border-radius:100%;" src="'.base_url("upload/info/".$row->gambar_info).'"</td>
                          <td>'.$row->judul_info.'</td>
                          <td>'.$row->data_entri.'</td>
                          <td><button class="btn btn-primary"><a href="'.base_url('Admin_informasi/edit/'.$row->info_id).'" class="fa fa-pencil-square-o" style="text-decoration: none; color: white;"></a></button>
                            <a href="'.base_url('Admin_informasi/hapus/'.$row->info_id).'" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>';
                       }
                    } 

                    ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
