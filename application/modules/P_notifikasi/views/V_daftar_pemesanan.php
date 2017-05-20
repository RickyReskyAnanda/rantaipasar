<?php for ($i=0; $i < count($data); $i++) { ?>
<div class="col-md-12">
    <div class="profile-image">
        <img src="<?=base_url()?>admin/img/profil/<?=$data[$i]['foto_profil']?>" class="img-circle circle-border m-b-md" alt="profile">
    </div>
    <div class="profile-info">
        <div class="">
            <div>
                <h2 class="no-margins">
                    <?=$data[$i]['nama_usaha']?>
                </h2>
                <h4><?=$data[$i]['nama_pj']?></h4>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-primary" onclick="detailData('<?=$data[$i]['id_invoice']?>')" data-toggle="modal" data-target="#myModal5">
                         Data Lengkap 
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php } ?>


