
<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Daftar Produsen</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <strong>Daftar Produsen</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="search-form">
                    <div class="input-group">
                        <input type="text" placeholder="Cari Produsen" name="pencarian" id="pencarianD" class="form-control input-lg">
                        <div class="input-group-btn">
                            <button class="btn btn-lg btn-primary" type="submit" onclick="ambilData()">
                                Search
                            </button>
                        </div>
                    </div>
            </div>
            <div class="row" id="pencarianProdusen" style="margin-top: 15px;">
                
            </div>
        </div>
        <script type="text/javascript">
            function ambilData(){
                var cari = $('#pencarianD').val();
                $.ajax({
                    type : 'POST',
                    url: "<?=base_url().'D_cari_produsen/select_data_pencarian_produsen'?>",
                    data:'pencarian='+cari,
                    success: function(hasil) {
                        $('#pencarianProdusen').html(hasil);
                    }
                });
            }
            
        </script>