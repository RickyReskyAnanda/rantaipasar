<div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>Pemesanan</h2>
                            <p>
                                Pesanan
                            </p>
                            <!-- <div class="input-group">
                                <input type="text" placeholder="Search client " class="input form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                            </div> -->
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted">1406 Elements</span>
                                <li class="active" onclick="ambilData('menunggu')"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Sementara Proses</a></li>
                                <li class="" onclick="ambilData('diterima')"><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> Disetujui</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="row m-b-lg m-t-lg" id="daftarProses">
                                            

                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="full-height-scroll">
                                        <div class="row m-b-lg m-t-lg" id="daftarDisetujui">
                                            

                                            
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


<div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Order</h4>
            </div>
            <div class="modal-body" id="detailData2">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="ubahPersetujuan('diterima')">Disetujui</button>
                <button type="button" class="btn btn-white" data-dismiss="modal" onclick="ubahPersetujuan('ditolak')">Tidak</button>
            </div>
        </div>
    </div>
</div>

        <script type="text/javascript">
        var jenis2='menunggu';
            function ambilData(jenis){
                if(jenis=='menunggu'){
                    idnya = '#daftarProses';
                }else{
                    idnya = '#daftarDisetujui';
                }
                jenis2=jenis;
                $(idnya).html('');
                $.ajax({
                    type : 'POST',
                    url: "<?=base_url().'P_notifikasi/select_data_pemesanan'?>",
                    data:"persetujuan="+jenis,
                    success: function(hasil) {
                        // alert(hasil);
                        $(idnya).html(hasil);
                    }
                });
            }
            ambilData(jenis2);
            var idData = '0';
            function detailData(id){
                idData = id;
                $.ajax({
                    type:"POST",
                    url: "<?=base_url().'P_notifikasi/select_detail_data_pemesanan'?>",
                    data:"id="+id,
                    success: function(hasil) {
                        $('#detailData2').html(hasil);
                    }
                });
            }
            function ubahPersetujuan(status){
                $.ajax({
                    type:"POST",
                    url: "<?=base_url().'P_notifikasi/update_status_data_pemesanan'?>",
                    data:"id="+idData+"&persetujuan="+status,
                    success: function(hasil) {
                        if(hasil=='berhasil'){
                            ambilData(jenis2);
                            swal("Berhasil!", "Berhasil memperbaharui data.", "success");
                        }else{
                            swal("Gagal!", "Gagal mememperbaharui data.", "error");
                        }
                    }
                });
            }
        </script>