<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_gudang_c WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>


<section class="content">

<div class="container-fluid">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update/update_data_c.php' enctype="multipart/form-data">


                <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>Nama</label>
                              <input type="text" class="form-control" placeholder="Nama" name='nama_barang' value="<?php echo $view['nama_barang'];?>">
                              <input type="text" class="form-control" placeholder="id" name='id' value="<?php echo $view['id'];?>" hidden>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Masukan deskripsi disini" name='deskripsi' value="<?php echo $view['deskripsi'];?>">
                          </div>
                        </div>
                </div>

                <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Kondisi</label>
                              <select class="custom-select" name="kondisi" required>
                              <option value="<?php echo $view['kondisi'];?>" selected><?php echo $view['kondisi'];?></option>
                              <option value="Baru">Baru</option>
                              <option value="Bekas">Bekas</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                                <label>Penanggung Jawab</label>
                                <input type="text" class="form-control" placeholder="Masukan deskripsi disini" name='penanggungjawab' value="<?php echo $view['penanggungjawab'];?>">
                          </div>
                        </div>


                </div>

                

                <div class="row">
                  <button type="submit" class="btn btn-sm btn-info mt-3">Simpan</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>



</div>
</section>