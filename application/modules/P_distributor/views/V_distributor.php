<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Daftar Produk</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <strong>Distributor</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>Distributor</h2>
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Daftar Distributor</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                            <div class="wrapper wrapper-content animated fadeInRight">
                                                <div class="row" id="daftarDistributor">
                                                    
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            function ambilData(){
                $.ajax({
                    url: "<?=base_url().'P_distributor/select_data_distributor'?>",
                    success: function(hasil) {
                        $('#daftarDistributor').html(hasil);
                    }
                });
            }
            ambilData();
            function persetujuan(status,identitas){
                swal({
                    title: "Apakah Anda Ingin Memutuskan Kerja Sama ?",
                    text: "",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Batal",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya!",
                    closeOnConfirm: false
                }, function () {
                    $.ajax({
                        type:"POST",
                        url: "<?=base_url().'P_distributor/update_status_data_distributor'?>",
                        data:"id="+identitas+"&status="+status,
                        success: function(hasil) {
                            if(hasil=='berhasil'){
                                swal("Berhasil!", "Berhasil mengubah data.", "success");
                                ambilData();
                            }else{
                                swal("Gagal!", "Gagal mengubah datas.", "error");
                            }
                        },
                        error: function(){
                            swal("Gagal!", "Terjadi Masalah", "error");
                        }
                    });
                });
            }
        </script>



        
        