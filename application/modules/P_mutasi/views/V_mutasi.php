        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Mutasi</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Mutasi</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted small pull-right">Nama Perusahaaan</span>
                            
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted">No Rekening : 000-000</span>
                                <li class="active"><a data-toggle="tab"><i class="fa fa-table"></i> Data Mutasi</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Tanggal</th>
                                                    <th>Nomor Invoice </th>
                                                    <th>Bank</th>
                                                    <th>Mutasi</th>
                                                    <!-- <th>Saldo</th> -->
                                                </tr>
                                                <?php

                                                $totalnya = 0;
                                                 for ($i=0; $i < count($data); $i++) { ?>
                                                <tr>
                                                    <td><?=$i+1?></td>
                                                    <td><?=$data[$i]['waktu']?></td>
                                                    <td><?=$data[$i]['no_invoice']?></td>
                                                    <td>BNI</td>
                                                    <td><?=$data[$i]['mutasi']?></td>
                                                    <!-- <td><?=$data[$i]['mutasi']?></td> -->
                                                </tr>

                                                <?php 

                                                $totalnya+=$data[$i]['mutasi'];
                                                } ?>
                                                <tr>
                                                    <th colspan="3"></th>
                                                    <th>Total</th>
                                                    <th><?=$totalnya?></th>
                                                <tr>
                                                
                                                </tbody>
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