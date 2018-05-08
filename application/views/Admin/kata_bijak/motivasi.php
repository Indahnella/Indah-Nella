 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; ">KATA_KATA MOTIVASI</label>
                <a href="<?php echo base_url().'index.php/admin_motivasi/tambah'?>" class="btn btn-info btn-md" style="width: 120px; height: 30px; margin-left: 10px;"><i class="fa fa-plus"> Add</i></a>
                <br>
                <table id="table_id" class="table table-stripped table-bordered">
                  <thead style="text-align: center;" class="table-success">
                    <th>No.</th>
                    <th>User_id</th>
                    <th>Gambar</th>
                    <th>Motivasi</th>
                    <th>Pembuat</th>
                    <th>Data Entri</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody style="text-align: center;" class="table-warning">
                   <?php 
                    if ($query->num_rows()>0) {
                     $no=0; 
                    foreach ($query->result() as $row) {
                    $no++;
                    echo' 
                      <tr>     
                          <td>'.$no.'</td>
                          <td>'.$row->motivasi_user_id.'</td>
                          <td><img style="width:50px; height:50px;" src="'.base_url("upload/kata_bijak/".$row->gambar).'"</td>
                          <td>'.$row->isi_motivasi.'</td>
                          <td>'.$row->pembuat_motivasi.'</td>
                          <td>'.$row->data_entri.'</td>
                          <td>
                          <button class="btn btn-primary"><a href="'.base_url('Admin_motivasi/edit/'.$row->motivasi_id).'" class="fa fa-pencil-square-o" style="text-decoration: none; color: white;"></a></button>
                            <a href="'.base_url('Admin_motivasi/hapus/'.$row->motivasi_id).'" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
   