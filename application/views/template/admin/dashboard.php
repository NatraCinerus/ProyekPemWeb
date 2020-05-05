<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $this->db->count_all('kategori'); ?></h3>

                <p>Kategori</p>
              </div>
              <div class="icon">
                <i class="fas fa-atom"></i>
              </div>
              <a href="<?php echo base_url('panel/kategori'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $this->db->count_all('kelas'); ?></h3>

                <p>Kelas</p>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="<?php echo base_url('panel/kelas'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $this->db->count_all('user'); ?></h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?php echo base_url('panel/user'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $this->db->count_all('video'); ?></h3>

                <p>Materi</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url('panel/kelas'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
