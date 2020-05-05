<?php 
    function timeago($date) {
       $timestamp = strtotime($date);   
       
       $strTime = array("detik", "menit", "jam", "hari", "bulan", "tahun");
       $length = array("60","60","24","30","12","10");

       $currentTime = time();
       if($currentTime >= $timestamp) {
            $diff     = time()- $timestamp;
            for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
            $diff = $diff / $length[$i];
            }

            $diff = round($diff);
            return $diff . " " . $strTime[$i] . " yang lalu ";
       }
    }

 ?>
<div class="container kategori">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Kategori</div>
                <ul class="list-group category_block">
                    <?php foreach ($kategori as $key) : ?>
                        <li class="list-group-item"><a href="#"><?php echo $key['nama_kategori']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <?php foreach ($kelas as $key) :?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/login.png" alt="kelas">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#" title="View Product"><?php echo $key['nama_kelas']; ?></a></h4>
                                <p class="card-text"><?php echo $key['deskripsi']; ?></p>
                                <div class="row">
                                    <div class="col font10">
                                        <img src="assets/iconic/svg/video.svg" alt="video">
                                        <label><?php echo $key['jml_kelas']; ?> video</label>
                                    </div>
                                    <div class="col font10">
                                        <img src="assets/iconic/svg/timer.svg" alt="waktu">
                                        <label><?php echo timeago($key['waktu_terbit']) ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>