            <div class="row m-b-lg m-t-lg">
                <div class="col-md-9">

                    <div class="profile-image">
                        <img src="<?=base_url()?>admin/img/profil/<?=$this->session->userdata('foto_profil')?>" class="img-circle img-responsive circle-border m-b-md" alt="profile">
                    </div>
                    <div class="profile-info">
                        <h2 class="no-margins">
                            Identitas
                        </h2>
                        <h4>Founder of Groupeq</h4>
                        <table class="table small m-b-xs">
                            <tbody>
                            <tr>
                                <td>
                                    <strong><?= ucfirst($this->session->userdata('nama_usaha')); ?></strong>
                                </td>
                                <td>
                                   <?= ucfirst($this->session->userdata('nama_pj')); ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <strong>Alamat</strong> 
                                </td>
                                <td>
                                    <?= ucfirst($this->session->userdata('alamat_usaha')); ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="text-right">
                        <button type="button" class="btn btn-edit" >
                        Edit
                        </button>
                   </div>
                   <div class="text-right">
                        <button type="button" class="btn btn-primary" >
                            Daftar Produsen
                        </button>
                        <button type="button" class="btn btn-primary" >
                            Transaksi
                        </button>
                   </div>
                </div>

            </div>


            <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Messages</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content ibox-heading">
                                <h3> VISI</h3>
                                <small><i class="fa fa-tim"></i>Menjadi lembaga keuangan yang unggul dalam layanan dan kinerja</small>
                            </div>
                            <div class="ibox-content ibox-heading">
                                <h3> MISI</h3>
                                <small><i class="fa fa-tim"></i> 
                                <ol type="1">
                                    <li>Membarikan layanan prima dan solusi yang bernilai tambah kepada seluruh nasabah, dan selaku mitra pilihan utama</li>
                                    <li>Meningkatkan nilai investasi yang unggul bagi investor</li>
                                <ol>
                                </small>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        
                                    </div>

                                    

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="row">
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Gallery</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                        <div class="lightBoxGallery">
                            <a href="<?=base_url()?>admin/img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/1s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/2s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/3s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/4s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/5s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/6s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/7s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/8.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/8s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/9s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/10s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/12s.jpg"></a>
                            <a href="<?=base_url()?>admin/img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="<?=base_url()?>admin/img/gallery/4s.jpg"></a>

                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                           
                                            </div>
                                            <div class="col-lg-6">
                                                
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
