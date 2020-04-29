<div class="container">
  <nav class="navbar navbar-expand-md  nav-dinamis">
      <div class="mx-auto order-0">
          <a class="navbar-brand mx-auto" href="../ProyekPemWeb">Sekolah Koding</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('kelas') ?>">Kelas</a>
              </li>
              <?php if ($this->session->userdata('level') == "admin") :?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('panel') ?>">Panel</a>
                </li>
              <?php elseif ($this->session->userdata('level') == "user") : ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo '#';//base_url('User') ?>">User</a>
                </li>
              <?php endif; ?>
              <?php if ($this->session->userdata('status') != "login") : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login</a>
                </li>
              <?php else : ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('main/logout') ?>">Logout</a>
                </li>
              <?php endif; ?>
          </ul>
      </div>
  </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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