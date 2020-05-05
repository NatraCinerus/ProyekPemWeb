<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <a href="#" data-toggle="modal" data-target="#tambah" style="margin-right: 5px;float: right;margin-top: 10px;">
                  <button class="btn btn-primary">Tambah</button>
                </a>
                <?php if ($this->session->flashdata('flash')) : ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Kategori<strong> Berhasil </strong><?php echo $this->session->flashdata('flash'); ?>
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
                      <th>Kategori</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kategori as $key) :?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['nama_kategori'] ?></td>
                        <td>
                          <a href="<?php echo base_url('panel/hapusKategori/')."/".$key['id_kategori'] ?>" class="btn btn-danger" onclick="return confirm('anda yakin ingin menghapus?')">Hapus</a>
                          <a href="#" data-toggle="modal" data-target="#edit<?php echo $key['id_kategori'] ?>" class="btn btn-warning">Edit</a>
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
<!-- Modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('panel/addKategori') ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori.." name="kategori">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Tambah" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal edit -->
<?php foreach ($kategori as $key) :?>
<div class="modal fade" id="edit<?php echo $key['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('panel/editKategori') ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori.." name="kategori" value="<?php echo $key['nama_kategori'] ?>">
            </div>
        </div>
        <input type="hidden" name="id_kategori" value="<?php echo $key['id_kategori']; ?>">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Edit" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>