<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kelas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <a href="<?php echo base_url('panel/addKelas'); ?>" style="margin-right: 5px;float: right;margin-top: 10px;">
                  <button class="btn btn-primary">Tambah Kelas</button>
                </a>
                <?php if ($this->session->flashdata('flash')) : ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Kelas<strong> Berhasil </strong><?php echo $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                <?php elseif ($this->session->flashdata('materi')) :?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Materi<strong> Berhasil </strong><?php echo $this->session->flashdata('materi'); ?>
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
                      <th>Nama Kelas</th>
                      <th>Level kelas</th>
                      <th>Poin</th>
                      <th>Waktu Terbit</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kelas as $key) :?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['nama_kelas'] ?></td>
                        <td><?php echo $key['level_kelas'] ?></td>
                        <td><?php echo $key['poin'] ?></td>
                        <td><?php echo $key['waktu_terbit'] ?></td>
                        <td>
                          <a href="<?php echo base_url('panel/hapusKelas')."/".$key['id_kelas'] ?>" class="btn btn-danger" onclick="return confirm('anda yakin ingin menghapus?')">Hapus</a>
                          <a href="<?php echo base_url('panel/editKelas')."/".$key['id_kelas'] ?>" class="btn btn-warning">Edit</a>
                          <a href="#" data-toggle="modal" data-target="#detail<?php echo $key['id_kelas'] ?>" class="btn btn-primary">Detail</a>
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
<!-- Modal detail -->
<?php foreach ($kelas as $key) : ?>
<div class="modal fade" id="detail<?php echo $key['id_kelas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('main/login') ?>" method="post">
        <div class="modal-body">
          <?php foreach ($detail_kelas as $dtKelas) :?>
            <?php if ($key['id_kelas'] == $dtKelas['id_kelas']) :?>
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading" style="display: inline;"><?php echo $dtKelas['judul_video']; ?></h4>
              <a href="<?php echo base_url('panel/editMateri')."/".$dtKelas['id_video']; ?>">
                <i class="fa fa-edit" style="float: right; margin: 5px"></i>
              </a>
              <a href="<?php echo base_url('panel/hapusMateri')."/".$dtKelas['id_video']; ?>">
                <i class="fa fa-trash" style="float: right; margin: 5px" onclick="return confirm('anda yakin ingin menghapus?')"></i>
              </a>
              <br>
              <small><?php echo $dtKelas['link']; ?></small>
              <hr>
              <p class="mb-0"><?php echo $dtKelas['deskripsi']; ?></p>
            </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="<?php echo base_url('panel/addMateri')."/".$key['id_kelas'] ?>" class="btn btn-primary">Tambah Materi</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>