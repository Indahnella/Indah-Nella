 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; ">ARTIKEL</label>
                 <button class="btn btn-info btn-md" style="width: 120px; height: 30px; margin-left: 10px;"><a href="<?php echo base_url().'index.php/admin_artikel/tambah' ?>" class="fa fa-plus" style="text-decoration: none;color: white;"> Tambahkan</a></button>
                <br>
                <table id="table_id" class="table table-stripped table-bordered">
                  <thead style="text-align: center;" class="table-danger">
                    <th>No.</th>
                    <th>User_id</th>
                    <th>Gambar</th>
                    <th>Judul Artikel</th>
                    <th>Data Entri</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody style="text-align: center;" class="table-info">
                    <?php 
                    if ($query->num_rows()>0) {
                     $no=0; 
                    foreach ($query->result() as $row) {
                    $no++;
                    echo' 
                      <tr>     
                          <td>'.$no.'</td>
                          <td>'.$row->artikel_user_id.'</td>
                          <td><img style="width:50px; height:50px; border-radius:100%;" src="'.base_url("upload/artikel/".$row->gambar_artikel).'"></td>
                          <td>'.$row->judul_artikel.'</td>
                          <td>'.$row->data_entri.'</td>
                          <td><button class="btn btn-primary"><a href="'.base_url('Admin_artikel/edit/'.$row->artikel_id).'" class="fa fa-pencil-square-o" style="text-decoration: none; color: white;"></a></button>
                            <a href="'.base_url('Admin_artikel/hapus/'.$row->artikel_id).'" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    