<?php for ($i=0; $i < count($data); $i++) { ?>
	
<div class="col-md-12">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="profile-info">
                <div class="profile-image">
                    <img src="<?=base_url()?>admin/img/profil/<?=$data[$i]['foto_profil']?>" class="img-circle img-responsive circle-border m-b-md" alt="profile">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="profile-info">
                <h5><?=ucfirst($data[$i]['nama_usaha'])?></h5>
                <h5><?=ucfirst($data[$i]['nama_pj'])?></h5>
                <h5><?=ucfirst($data[$i]['jenis_usaha'])?></h5>
                <h5><?=ucfirst($data[$i]['no_kontak'])?></h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="profile-info">
                <h5><?=ucfirst($data[$i]['alamat_usaha'])?></h5>
                <h5><?=ucfirst($data[$i]['email'])?></h5>
                <h5><?=ucfirst($data[$i]['rekening'])?></h5>
            </div>
        </div>
        <div class="col-md-2">
           <div class="text-left">
                <button type="button" class="btn btn-danger" onclick="persetujuan('ditolak','<?=$data[$i]['id_relasi']?>')">
                    <i class="fa fa-minus-square"></i> Batalkan
                </button>
           </div>
        </div>

    </div>
</div>
<?php } ?>