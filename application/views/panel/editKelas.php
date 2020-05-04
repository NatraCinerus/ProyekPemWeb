 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" action="" method="post">
                <div class="card-body">
                  <?php if (validation_errors() ) :?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo validation_errors(); ?>
                    </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" class="form-control"placeholder="Nama kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Poin Kelas</label>
                    <input type="number" class="form-control"placeholder="Poin kelas" name="poin" value="<?php echo $kelas['poin'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Level Kelas</label>
                        <select class="custom-select mr-sm-2" name="level">
                          <?php foreach ($level as $key) :?>
                            <?php if ($key == $kelas['level_kelas']) :?>
                              <option value="<?php echo $key ?>" selected><?php echo $key ?></option>
                            <?php else : ?>
                              <option value="<?php echo $key ?>"><?php echo $key ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi Kelas</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="deskripsi"><?php echo $kelas['deskripsi'] ?></textarea>
                  </div>
                  <input type="hidden" name="date" value="<?php echo date("Y-m-d")?>">
                  <input type="hidden" name="id" value="<?php echo $kelas['id_kelas']; ?>">
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>