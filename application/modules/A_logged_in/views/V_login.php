<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2015 00:53:03 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?=base_url()?>admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>admin/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="container animated fadeInDown" style="margin-top: 100px;">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to IN+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="post" name="login" method="post" action="<?=base_url('A_logged_in/cek_logged_in')?>">
                        <div class="row">
                            <div class="col-md-5">
                                <input type="email" class="form-control" name="email" placeholder="Username" required="">
                            </div>
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                            </div>
                        </div>
                    </form>
                    <hr class="hr">
                    <h4></h4>
                    <form method="post" action="<?=base_url('A_logged_in/proses_pendaftaran')?>" name="daftar"> 
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_pj" placeholder="Nama" required="">
                        </div>
                    </div>   
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_usaha" placeholder="Nama Usaha" required>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                     </div> 
                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <select class="form-control" name="role" required="">
                                <option value="distributor">Distributor</option>
                                <option value="produsen">Produsen</option>
                            </select>
                        </div>
                     </div>   
                        <button class="btn btn-sm btn-primary btn-block"  style="margin-top: 15px"><i class="fa fa-user"></i> Buat Akun</button>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login_two_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2015 00:55:09 GMT -->
</html>
