<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Daftar Produsen</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <strong>Daftar Produsen</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <?php for ($i=0; $i < count($data); $i++) { ?>
                    
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="product-imitation"  style="padding:0;">
                                <img src="<?=base_url()?>admin/img/profil/<?=$data[$i]['foto_profil']?>" class="img-responsive">
                            </div>
                            <div class="product-desc">
                                <small class="text-muted"><?=ucfirst($data[$i]['jenis_usaha'])?></small>
                                <a href="<?=base_url()?>distributor/produk/detail/<?=$data[$i]['id_akun']?>" class="product-name"> <?=ucfirst($data[$i]['nama_usaha'])?></a>
                                <a href="<?=base_url()?>distributor/produk/detail/<?=$data[$i]['id_akun']?>">
                                <p><?=ucfirst($data[$i]['no_kontak'])?></p>
                                    <button type="button" class="btn btn-xs btn-outline btn-primary" >
                                        <i class="fa fa-shopping-cart"></i> Pesan 
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
                <div class="row">

                <?php }

                } ?>
            </div>
        </div>