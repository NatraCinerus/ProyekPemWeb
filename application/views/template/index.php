<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<title>Home</title>
</head>
<body>
  	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="padding: 0px">
  	<?php if ($this->session->flashdata('info') == 'salah') : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" align="center" style="margin: 0px">
                    Username atau Password <strong> <?php echo $this->session->flashdata('info'); ?> </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
	<?php elseif ($this->session->flashdata('info') == 'terdaftar') : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert" align="center" style="margin: 0px">
                    Anda berhasil <strong> <?php echo $this->session->flashdata('info'); ?> </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    <?php elseif ($this->session->flashdata('info') == 'benar') : ?>
    			<div class="alert alert-warning alert-dismissible fade show" role="alert" align="center" style="margin: 0px">
                    Masukkan username dan password dengan <strong> <?php echo $this->session->flashdata('info'); ?> </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
	<?php endif; ?>
            </div>
        </div>
    </div>
<div class="landing-page">
	<?php echo $headernya; ?>
	<?php echo $contentnya; ?>
	<?php echo $footernya; ?>
</div>

</body>
</html>
