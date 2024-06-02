<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Tambah Data</button>
              <br>
              <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Kondisi</th>
                    <th>Penanggungjawab</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_gudang");
                    while($barang = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>

                    <td width="10%"><?php echo $no;?></td>
                    <td  width="10%"><?php echo $barang['nama_barang'];?></td>
                    <td  width="10%"><?php echo $barang['deksripsi'];?></td>
                    <td  width="10%"><?php echo $barang['kondisi'];?></td>
                    <td  width="10%"><?php echo $barang['penanggungjawab'];?></td>
                
                    <td>    
                    <a onclick="hapus_data(<?php echo $barang['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="index.php?page=edit-data" class="btn btn-sm btn-success" style="margin-left:20px;">Sunting</a>
                    </td>

                  </tr>

                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  <div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Large Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>

        <form method="get" action="add/tambahdata.php">
          <div class="modal-body">  
          <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama" required>
                </div>
            
                <div class="col">
                <input type="text" class="form-control" placeholder="Deskripsi" name="deksripsi" required>
                </div>

                <div class="col">
                  <select class="custom-select" name="kondisi" required>
                    <option value="">Pilih Kondisi</option>
                    <option value="1">Baru</option>
                    <option value="2">Bekas</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                
                <div class="col">
                <input type="text" class="form-control" placeholder="Penanggungjawab" name="penanggungjawab" required>
                </div>

          </div>
          </div>
       

      <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </div>
      </form>

  </div>

</div>

<script>
  function hapus_data(data_id){
    // alert('ok');
    // window.location=("delete/hapus_data.php?id="+data_id);
//     Swal.fire({
//     title: "Good job!",
//     text: "You clicked the button!",
//     icon: "success"
// });

    Swal.fire({
      title: "Apakah anda ingin menghapus?",
      // showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Yap betul",
      // denyButtonText: `Don't save`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("delete/hapus_data.php?id="+data_id);
      } 
    })

  }
  </script>