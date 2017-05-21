<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Invoice</h4>
                        <small>
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td> : </td>
                                <td><?=ucfirst($data['nama_usaha'])?></td> 
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?=ucfirst($data['alamat_usaha'])?></td>
                            </tr>
                            <tr>
                                <td>No. Invoice</td>
                                <td>:</td>
                                <td><?=ucfirst($data['no_invoice'])?></td>
                            </tr>
                            <tr>
                                <td>Tgl Invoice</td>
                                <td>:</td>
                                <td><?=ucfirst($data['tgl_invoice'])?></td>
                            </tr>
                        </table>
                        </small>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Sub Total</th>
                                </tr>
                                <?php 
                                $totalbayar=0;
                                for ($i=0; $i < count($data['order']); $i++) { ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><?=ucfirst($data['order'][$i]['nama_produk'])?></td>
                                    <td><?=ucfirst($data['order'][$i]['jumlah_order'])?></td>
                                    <td><?="Rp. " . number_format($data['order'][$i]['harga'],0,',','.');?></td>
                                    <td><?="Rp. " . number_format($data['order'][$i]['sub_total'],0,',','.');?></td>
                                </tr>
                                <?php 

                                $totalbayar+=$data['order'][$i]['sub_total'];
                                } ?>
                                
                            </table>
                            <div class="modal-footer">
                            Total Bayar = <?="Rp. " . number_format($totalbayar,0,',','.');?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?=base_url()?>D_notifikasi/update_data_invoice/<?=$data['id_invoice']?>/tunai">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Kredit</button>
                        </a>
                        <a href="<?=base_url()?>D_notifikasi/update_data_invoice/<?=$data['id_invoice']?>/kredit">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tunai</button>
                        </a>
                    </div>