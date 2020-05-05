<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <a href="<?php echo base_url('panel/addUser'); ?>" style="margin-right: 5px;float: right;margin-top: 10px;">
                  <button class="btn btn-primary">Tambah</button>
                </a>
                <?php if ($this->session->flashdata('flash')) : ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data User<strong> Berhasil </strong><?php echo $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  
                <?php endif; ?>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Username</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($user as $key) :?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['username'] ?></td>
                        <td><?php echo $key['level'] ?></td>
                        <td>
                          <a href="#" class="btn btn-danger" onclick="hapus(<?php echo $key['id_user']; ?>)">Hapus</a>
                          <a href="<?php echo base_url('panel/editUser/')."/".$key['id_user'] ?>" class="btn btn-warning">Edit</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<script>
  function hapus(id) {
    var id_user = <?php echo $this->session->userdata('id'); ?>;
    var hapusDiri = "<?php echo base_url('panel/hapusDiri/'); ?>"+id;
    var hapus = "<?php echo base_url('panel/hapusUser/'); ?>"+id;
    if (id_user == id) {
      var cek = confirm('Anda akan langsung terlogout setelah menghapus akun anda!Yakin?');
      if (cek == true) {
        window.location.href = hapusDiri;
      } 
    }else{
       var cek = confirm('anda yakin ingin menghapus?');
       if (cek == true) {
        window.location.href = hapus;
      } 
    }
  }
</script>