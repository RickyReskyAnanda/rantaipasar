        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Daftar Produk</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?=base_url('produsen')?>">Baranda</a>
                    </li>
                    <li>
                        <a href="<?=base_url('produsen/produk')?>">Daftar Produk</a>
                    </li>
                    <li class="active">
                        Tambah Produk
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Masukkan data produk </h5>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="<?=base_url('P_produk/insert_data_produk')?>" enctype="multipart/form-data">
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Produk</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Nama Produk" class="form-control" name="nama_produk" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Jumlah Stok</label>
                                    <div class="col-sm-10"><input type="number" placeholder="Jumlah Stok" class="form-control" name="stok" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Harga Produk</label>
                                    <div class="col-sm-10"><input type="number" placeholder="Harga Produk" class="form-control" name="harga" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto</label>
                                    <div class="col-sm-10">
                                        <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                            <input type="file" accept="image/*" id="inputImage" class="hide" name="foto" required>
                                                Upload Gambar
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-9">
                                        <button class="btn btn-white" type="reset">Reset</button>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        