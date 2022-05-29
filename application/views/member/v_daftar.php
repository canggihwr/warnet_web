<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico');?>" />
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css');?>">

    <link href="<?php echo base_url('sweet-alert2/sweetalert2.min.css');?>" rel="stylesheet" type="text/css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo base_url('assets/images/warnet2.png');?>" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="<?= site_url('member/proses') ?>" method="post">
                    <span class="login100-form-title">
                        Daftar Sebagai Member
                    </span>
                    <?php if ($this->session->flashdata('flash') ) : ?>
                                <div class="alert alert-success alert-dismissable fade show" role="alert">
                                    Anda <b>berhasil</b> <?= $this->session->flashdata('flash'); ?>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                    <?php if ($this->session->flashdata('pesan')){ ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('pesan'); ?>
                    </div>
                <?php } ?>
                    <div class="wrap-input100 validate-input" data-validate = "Nama harus diisi">
                        <input class="input100" type="text" name="tnama" placeholder="Nama Lengkap">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Email harus diisi: cwr@gnail.com">
                        <input class="input100" type="text" name="temail" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Username harus diisi">
                        <input class="input100" type="text" name="tusername" placeholder="Username ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password harus diisi">
                        <input class="input100" type="password" name="tpassword" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn waves-effect" id="sa-success" value="Daftar">
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Udah punya akun? 
                        </span>
                        <a class="txt2" href="<?= site_url('Login/index') ?>">
                            Langsung Login aja
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="<?= site_url('Login/admin') ?>">
                            Login sebagai admin
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        $('#sa-success').click(function () {
            swal(
                {
                    title: 'Success!',
                    text: 'Proses berhasil terima kasih!',
                    type: 'success',
                    confirmButtonColor: '#4fa7f3'
                }
            )
        });
    </script>
    

    
<!--===============================================================================================-->  
    <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/vendor/tilt/tilt.jquery.min.js');?>"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->

    <!-- Sweet-Alert  -->
        <script src="<?php echo base_url('sweet-alert2/sweetalert2.min.js');?>"></script>

        <script src="<?php echo base_url('sweet-alert2/jquery.sweet-alert.init.js');?>"></script>

    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>



</body>
</html>