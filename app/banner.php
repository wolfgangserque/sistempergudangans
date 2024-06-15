<?php
include("../config/config.php");
$query= mysqli_query($koneksi, "SELECT count(id) AS jumlahbrang FROM tb_gudang");
$view = mysqli_fetch_array($query);?>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $view['jumlahbrang']?></h3>

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
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
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
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
        
          <!-- ./col -->