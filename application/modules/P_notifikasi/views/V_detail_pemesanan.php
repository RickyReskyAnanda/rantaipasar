<h3 class="no-margins">
<?=$data['nama_usaha']?>
</h3>
<h4><?=ucfirst($data['nama_pj'])?></h4>
<p><?=$data['alamat_usaha']?></p>
<div class="full-height-scroll">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga satuan</th>
                <th>Sub Total</th>
           </tr>
            <tbody>
            <?php for ($i=0; $i < count($data['daftar_barang']); $i++) { ?>
            <tr>
                <td><?=$i+1?></td>
                <td><?=$data['daftar_barang'][$i]['nama_produk']?></td>
                <td><?=$data['daftar_barang'][$i]['jumlah_order']?></td>
                <td><?="Rp. " . number_format($data['daftar_barang'][$i]['harga'],0,',','.');?></td>
                <td><?="Rp. " . number_format($data['daftar_barang'][$i]['sub_total'],0,',','.');?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>