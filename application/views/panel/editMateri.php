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
                    <label>Judul Materi</label>
                    <input type="text" class="form-control"placeholder="Judul materi..." name="judul" value="<?php echo $materi['judul_video'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Link Materi</label>
                    <input type="text" class="form-control"placeholder="Link..." name="link" value="<?php echo $materi['link'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="deskripsi"><?php echo $materi['deskripsi'] ?></textarea>
                  </div>
                  <input type="hidden" name="id_video" value="<?php echo  $this->uri->segment(3, 0);; ?>">
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>