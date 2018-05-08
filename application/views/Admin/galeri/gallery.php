 <style type="text/css">
   th,tr{
    text-align: center;
   }
 </style>
 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; ">GALERY</label>
                 <a href="<?php echo base_url().'index.php/Admin_galleri/tambah' ?>" class="btn btn-info btn-md"  style="width: 120px; height: 30px; margin-left: 10px;"><i class="fa fa-plus"> Add</i></a>
                <br>
                <table id="table_id" class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          User_Id
                        </th>
                        <th>
                          Pengupload
                        </th>
                        <th>
                          Gambar
                        </th>
                        <th>
                          Ket.
                        </th>
                        <th>
                          Data Entri
                        </th>
                        <th>
                          Aksi
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    if ($query->num_rows()>0) {
                     $no=0; 
                    foreach ($query->result() as $row) {
                    $no++;
                    echo '
                      <tr>
                        <td>
                          '.$no.'
                        </td>
                        <td>
                          '.$row->gambar_user_id.'
                        </td>
                        <td class="py-1">
                          <img style="width:50px; height:50px; border-radius:100%;" src="'.base_url("upload/galeri/".$row->gambar).'" alt="image"/>
                        </td>
                        <td>
                          '.$row->ket.'
                        </td>
                        <td>
                          '.$row->data.'
                        </td>
                        <td>
                          <a href="'.base_url('Admin_galleri/edit/'.$row->gambar_id).'" class="btn btn-inverse-primary btn-fw"><i class="fa fa-paper-plane"></i></a>
                          <a href="'.base_url('Admin_galleri/hapus/'.$row->gambar_id).'" class="btn btn-inverse-danger btn-fw"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      ';
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
    