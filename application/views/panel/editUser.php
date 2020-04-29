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
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="username" value="<?php echo $user['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                        <select class="custom-select mr-sm-2" name="level">
                          <?php foreach ($level as $key) :?>
                            <?php if ($key == $user['level']) :?>
                              <option value="<?php echo $key ?>" selected><?php echo $key ?></option>
                            <?php else : ?>
                              <option value="<?php echo $key ?>"><?php echo $key ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo $user['password'] ?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $user['id_user']; ?>">
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>