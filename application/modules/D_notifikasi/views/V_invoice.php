<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Invoice</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Notifikasi
                    </li>
                    <li class="active">
                        <strong>Invoice</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-list"></i> Invoice</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>No Invoice</th>
                                                    <th>Produsen</th>
                                                    <th>Total Bayar</th>
                                                    <th>Tanggal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                <?php for ($i=0; $i < count($data); $i++) { ?>
                                                <tr>
                                                    <td><?=$i+1?></td>
                                                    <td><?=$data[$i]['no_invoice']?></td>
                                                    <td><?=$data[$i]['nama_usaha']?></td>
                                                    <td><?="Rp. " . number_format($data[$i]['total_bayar']['sub_total'],2,',','.');?></td>
                                                    <td><?=$data[$i]['tgl_invoice']?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" onclick="ambilData('<?=$data[$i]['id_invoice']?>')" >
                                                            <i class="fa fa-chevron-down"></i> Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </table>
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
        <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated flipInY" id="isiData">
                    
                </div>
            </div>
        </div>

<script type="text/javascript">
    function ambilData(idInvoice){
        $('#isiData').html('');
        $.ajax({
            type : 'POST',
            url: "<?=base_url().'D_notifikasi/select_data_detail_invoice'?>",
            data:"id_invoice="+idInvoice,
            success: function(hasil) {
                $('#isiData').html(hasil);
            }
        });
    }

    function pembayaran(bayar){
        $.ajax({
            type : 'POST',
            url: "<?=base_url().'D_notifikasi/update_data_invoice'?>",
            data:"pembayaran="+bayar,
            success: function(hasil) {
                $('#isiData').html(hasil);
            }
        });
    }
</script>