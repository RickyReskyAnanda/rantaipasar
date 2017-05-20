<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Daftar Produk</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Baranda</a>
                    </li>
                    <li class="active">
                        <strong>Daftar Produk</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?=base_url('produsen/produk/tambah')?>">
                    <button type="button" class="btn btn-primary dim" >
                        &nbsp<i class="fa fa-plus"></i> Tambah Produk
                    </button>
                    </a>
                    <?php if($this->session->flashdata('pesanInput')!=''){?>
                    <div class="alert alert-info alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <?= $this->session->flashdata('pesanInput');?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight" id="daftarProduk">
            
        </div>
        

        <script type="text/javascript">
            function ambilProduk(){
                $('#daftarProduk').html('');
                $.ajax({
                    url: "<?=base_url().'P_produk/select_data_produk'?>",
                    success: function(hasil) {
                        $('#daftarProduk').html(hasil);
                    }
                });
            }
            ambilProduk();
            function deleteProduk(id){
                swal({
                    title: "Apakah Anda Ingin Menghapus Produk ?",
                    text: "Produk akan terhapus dan tidak dapat dikembalikan lagi!",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Batal",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya!",
                    closeOnConfirm: false
                }, function () {
                    $.ajax({
                        type:"POST",
                        url: "<?=base_url().'P_produk/delete_data_produk'?>",
                        data:"id="+id,
                        success: function(hasil) {
                            if(hasil=='berhasil'){
                                swal("Berhasil!", "Berhasil menghapus produk.", "success");
                                ambilProduk();
                            }else{
                                swal("Gagal!", "Gagal menghapus produk.", "error");
                            }
                        }
                    });
                });
            }

        </script>