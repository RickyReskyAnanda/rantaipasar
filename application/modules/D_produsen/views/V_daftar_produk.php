

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Produk</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url('distributor')?>">Beranda</a>
            </li>
            <li>
                <a href="<?=base_url('distributor/produsen')?>">Daftar Produsen</a>
            </li>
            <li><strong>Produk</strong></li>
        </ol>
    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
<form method="post" action="<?=base_url('D_produsen/insert_data_pemesanan')?>">
    <div class="row">
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary dim" >
                <i class="fa fa-send"></i> Kirim Pesanan
            </button>
        </div>
    </div>
    <div class="row">
        <?php for ($i=0; $i < count($data); $i++) { ?>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">
                    <div class="product-imitation" style="padding: 0;">
                        <img src="<?=base_url()?>admin/img/produk/<?=$data[$i]['foto']?>" class="img-responsive">
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                    <?="Rp. " . number_format($data[$i]['harga'],0,',','.');?>


                        </span>
                        <a href="#" class="product-name"> <?=ucfirst($data[$i]['nama_produk']) ?></a>
                        <small class="font-bold">Jumlah Stok : <?=ucfirst($data[$i]['stok']) ?></small>
                        <div class="modal-footer">
                            Jumlah Pesanan <input type="number" name="<?=$data[$i]['id_produk']?>" class="form-control" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 

        if(($i+1)%4==0){?>
            </div>
            <div class="row" style="margin-top: 15px;">
            <?php } } ?>
    </div>
    </form>
</div>