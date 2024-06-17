<?php
include("../config/config.php");
$query1= mysqli_query($koneksi, "SELECT count(id) AS jumlahbrang FROM tb_gudang");
$view1 = mysqli_fetch_array($query1);


$query2= mysqli_query($koneksi, "SELECT count(id) AS jumlahbrang2 FROM tb_gudang_b");
$view2 = mysqli_fetch_array($query2);

$query3= mysqli_query($koneksi, "SELECT count(id) AS jumlahbrang3 FROM tb_gudang_c");
$view3 = mysqli_fetch_array($query3);

?>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $view1['jumlahbrang']?></h3>

                <p>Total Barang Gudang A</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
            
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><?php echo $view2['jumlahbrang2']?></h3>

                <p>Total Barang Gudang B</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
           
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $view3['jumlahbrang3']?></h3>

                <p>Total Barang Gudang C</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
             
            </div>
          </div>
        
          <!-- ./col -->