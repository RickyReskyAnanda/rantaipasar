<div class="row">
    <?php for ($i=0; $i < count($data); $i++) { ?>
    <div class="col-md-3">
        <div class="ibox">
            <div class="ibox-content product-box">

                <div class="product-imitation"  style="padding:0;">
                    <img src="<?=base_url()?>admin/img/produk/<?=$data[$i]['foto']?>" class="img-responsive">
                </div>
                <div class="product-desc">
                    <span class="product-price">
                        <?=$data[$i]['harga']?>
                    </span>
                    <a href="#" class="product-name"> <?=$data[$i]['nama_produk']?></a>
                    <small class="font-bold">Stok <?=$data[$i]['stok']?></small>
                    <div class="modal-footer">
                        <a href="<?=base_url()?>produsen/produk/edit/<?=$data[$i]['id_produk']?>">
                            <button type="button" class="btn btn-xs btn-primary" >
                                <i class="fa fa-pencil"></i> Edit 
                            </button>
                        </a>
                        <button type="button" class="btn btn-xs btn-primary" onclick="deleteProduk('<?=$data[$i]['id_produk']?>')">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    if(($i+1%4==0)){
        ?>
        </div>
        <div class="row">

        <?php
    }
    } ?>
</div>