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
                    <label>Username</label>
                    <input type="text" class="form-control"placeholder="Enter username" name="username">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                        <select class="custom-select mr-sm-2" name="level">
                          <?php foreach ($level as $key) :?>
                            <option value="<?php echo $key ?>"><?php echo $key ?></option>

                          <?php endforeach; ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>