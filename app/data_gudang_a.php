
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Gudang A</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Tambah Data</button>
              <br>
              <br>
                <table id="tabel1" class="table table-bordered table-hover">
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

                    <td width="1%"><?php echo $no;?></td>
                    <td><?php echo $barang['nama_barang'];?></td>
                    <td><?php echo $barang['deksripsi'];?></td>
                    <td><?php echo $barang['kondisi'];?></td>
                    <td><?php echo $barang['penanggungjawab'];?></td>
                
                    <td>    
                    <a onclick="hapus_data(<?php echo $barang['id'];?>)" class="btn btn-sm btn-danger" style="margin-left:100px;">Hapus</a>
                    <a href="index.php?page=edit-data&& id=<?php echo $barang['id'];?>" class="btn btn-sm btn-success" style="margin-left:20px;">Sunting</a>
                    <a class="view-data btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" style="margin-left:20px; padding:7px"
                    data-nama-barang="<?php echo $barang['nama_barang'];?>"
                    data-deskripsi="<?php echo $barang['deksripsi'];?>"
                    data-kondisi="<?php echo $barang['kondisi'];?>"
                    data-penanggungjawab="<?php echo $barang['penanggungjawab'];?>"
                  
                    
                    >Lihat Detail</a>
                  </td>

                  </tr>

                  <?php }?>
                  </tbody>
                  
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
        <h4 class="modal-title">Form</h4>
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
                    <option value="baru">Baru</option>
                    <option value="bekas">Bekas</option>
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

<!-- Modal View Data -->
<div class="modal fade" id="modal-view">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">View Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>

        <form method="get" action="add/tambahdata.php">
          <div class="modal-body">  
          <div class="row">
              <div class="col">
                Nama Barang: <div id="nama_barang"></div>
                </div>
            
                <div class="col">
                  Deskripsi: <div id="deskripsi"></div>
                </div>

                <div class="col">
                  Kondisi: <div id="kondisi"></div>
                </div>

                <div class="col">
                  Penanggungjawab: <div id="penanggungjawab"></div>
                </div>

                
                

          </div>
          </div>
       

      <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
