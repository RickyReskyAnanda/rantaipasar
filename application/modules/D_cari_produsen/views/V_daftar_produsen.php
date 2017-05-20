<?php for ($i=0; $i < count($data); $i++) { ?>
    <div class="col-md-3">
        <div class="ibox">
            <div class="ibox-content product-box">
                <div class="product-imitation"  style="padding:0;">
                    <img src="<?=base_url()?>admin/img/profil/<?=$data[$i]['foto_profil']?>" class="img-responsive">
                </div>
                <div class="product-desc">
                    <small class="text-muted"><?=ucfirst($data[$i]['jenis_usaha'])?></small>
                    <a href="<?=base_url()?>distributor/pencarian/detail/<?=$data[$i]['id_akun']?>" class="product-name"> <?=ucfirst($data[$i]['nama_usaha'])?></a>
                    <a href="<?=base_url()?>distributor/produsen/produk/<?=$data[$i]['id_akun']?>">
                    <p><?=ucfirst($data[$i]['no_kontak'])?></p>
                        <button type="button" class="btn btn-xs btn-outline btn-primary" >
                            <i class="fa fa-user"></i> Profil 
                        </button>
                    </a>
                    <!-- <button type="button" class="btn btn-xs btn-outline btn-primary" >
                        Profil <i class="fa fa-long-arrow-right"></i>
                    </button> -->
                </div>
            </div>
        </div>
    </div>
    <?php 
    if(($i+1)%4==0){ ?>

    </div>
    <div class="row" style="margin-top: 15px;">

    <?php }

    } ?>