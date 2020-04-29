<div class="container">
  <nav class="navbar navbar-expand-md navbar-bold">
      <div class="mx-auto order-0">
          <a class="navbar-brand mx-auto" href="#" style="color: white;">Sekolah Koding</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('kelas') ?>" style="color: white;">Kelas</a>
              </li>
              <?php if ($this->session->userdata('level') == "admin") :?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('panel') ?>" style="color: white;">Panel</a>
                </li>
              <?php elseif ($this->session->userdata('level') == "user") : ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo '#';//base_url('User') ?>" style="color: white;">User</a>
                </li>
              <?php endif; ?>
              <?php if ($this->session->userdata('status') != "login") : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#login" style="color: white;">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#daftar" style="color: white;">Daftar</a>
                </li>
              <?php else : ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('main/logout') ?>" style="color: white;">Logout</a>
                </li>
              <?php endif; ?>
          </ul>
      </div>
  </nav>
</div>

<!-- Modal Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('main/login') ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Login" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal SignUp -->
<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('main/daftar') ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              <input type="hidden" name="level" value="user">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Daftar" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>