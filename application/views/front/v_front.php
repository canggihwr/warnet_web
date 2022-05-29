
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>UBG Warnet</title>
  <meta name="description"  content="Creative Template" />
  <meta name="author" content="IG Design">
  <meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
  <meta property="og:title" content="Creative Template" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:width" content="470" />
  <meta property="og:image:height" content="246" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="Professional Creative Template" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
  <meta name="twitter:domain" content="http://ivang-design.com/" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="Professional Creative Template" />
  <meta name="twitter:image" content="http://ivang-design.com/" />

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

  <!-- Web Fonts 
  ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/> 
  
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/owl.transitions.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/colors/color.css"/>



  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      
  <!-- Favicons
  ================================================== -->
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
  
  
</head>
<body>  

  <div class="loader">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
      <rect x="0" y="0" width="4" height="10" fill="#333">
        <animateTransform attributeType="xml"
        attributeName="transform" type="translate"
        values="0 0; 0 20; 0 0"
        begin="0" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="10" y="0" width="4" height="10" fill="#333">
        <animateTransform attributeType="xml"
        attributeName="transform" type="translate"
        values="0 0; 0 20; 0 0"
        begin="0.2s" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="20" y="0" width="4" height="10" fill="#333">
        <animateTransform attributeType="xml"
        attributeName="transform" type="translate"
        values="0 0; 0 20; 0 0"
        begin="0.4s" dur="0.6s" repeatCount="indefinite" />
      </rect>
    </svg>  
  </div>
            

  
  <!-- Nav and Logo
  ================================================== -->
  
  <div id="menu-wrap" class="menu-back cbp-af-header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light mx-lg-0">
            <a class="navbar-brand" href=""><img src="img/ubg.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#voucher" data-ps2id-offset="120">Voucher Hotspot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pc">Komputer/PC</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#member">Member</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="btn btn-primary js-tilt" href="<?= site_url('Login/index') ?>" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Login</span></a>
                </li>
              </ul>
            </div>
          </nav>        
        </div>
      </div>
    </div>
  </div>

  
  <!-- Primary Page Layout
  ================================================== -->

  <div class="section full-height height-auto-lg hide-over background-light-blue">
    <div class="hero-center-wrap relative-on-lg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-left parallax-fade-top align-self-center z-bigger">
            <h2>Selamat datang di Bumigora NET.</h2>
            <p class="mt-3 mb-4 pb-3 font-weight-normal">Salah satu penyedia layanan internet tercepat di Kota Mataram, Gabung sebagai member sekarang dan dapatkan kemudahan berinternet.</p>
            <a class="btn btn-primary ml-lg-0 js-tilt" href="<?= site_url('Member/daftar') ?>" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Daftar Member Baru</span></a>
            <a class="btn btn-primary js-tilt" href="<?= site_url('Login/index') ?>" data-gal="m_PageScroll2id" data-ps2id-offset="68" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Login</span></a>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0 ">
            <div class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24">
              <img src="img/warnet2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ocean">
      <div class="wave"></div>
      <div class="wave"></div>
    </div>
    <div id="particles-js" class="min-height"></div>
  </div>

    <div class="section padding-top-big">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-sm-6">
            <div class="table-sale background-grey">
              <div class="table-line mt-4 mb-4"></div>
              <h4 class="text-center">12+</h4>
              <div class="table-line mt-4 mb-4"></div>
              <a class="btn disabled mt-5" href="#" role="button"><span>Jumlah Saran</span></a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mt-4 mt-sm-0">
            <div class="table-sale background-color table-shadow">
              <div class="table-line mt-4 mb-4"></div>
              <h4 class="text-center"><?php echo $jumlah;?></h4>
              <div class="table-line mt-4 mb-4"></div>
              <a class="btn btn-primary table-ver mt-5 js-tilt" href="#" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Jumlah Member</span></a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mt-4 mt-xl-0">
            <div class="table-sale background-grey future-price">
              <div class="table-line mt-4 mb-4"></div>
              <h4 class="text-center"><?php echo $jual;?></h4>
              <div class="table-line mt-4 mb-4"></div>
              <a class="btn disabled mt-5 background-white" href="#" role="button"><span>Voucher Terjual</span></a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mt-4 mt-xl-0">
            <div class="table-sale background-grey future-price">
              <div class="table-line mt-4 mb-4"></div>
              <h4 class="text-center"><?php echo $komputer;?></h4>
              <div class="table-line mt-4 mb-4"></div>
              <a class="btn disabled mt-5 background-white" href="#" role="button"><span>Jumlah PC</span></a>
            </div>
          </div>
        </div>
      </div>
      

  <div class="section padding-top-bottom-big background-white" id="member">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap text-center">
            <div class="back-title">member</div>
            <h3>Daftar Member Bumigora NET.</h3>
            <p>Daftar sekarang dan dapatkan kemudahan berinternet.</p>
          </div>
        </div>
        <table class="table table-bordered" id="member">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Member</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach ($member as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->username; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
            <script>
            $(document).ready(function(){
            $('#member').DataTable();
            });
            </script>
            <div> <br><h1> </h1><br></div>
        <div class="col-md-4">
          <div class="concept-box">
            <img class="mb-4" src="img/a-1.png" alt="">
            <h5>Murah</h5>
            <p>Harga voucher murah dan terjangkau.</p>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="concept-box">
            <img class="mb-4" src="img/a-2.png" alt="">
            <h5>Multi-Devices</h5>
            <p>Support Mobile device, efisien dan bisa digunakan up to 3 perangkat.</p>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="concept-box">
            <img class="mb-4" src="img/a-3.png" alt="">
            <h5>Kecepatan Tinggi</h5>
            <p>Speed stabil dan cepat, dahjangan ditanya lagi lah.</p>
          </div>
        </div>

  <div class="section padding-top-bottom-big" id="voucher">
    <div class="background-parallax" style="background-image: url('img/parallax-3.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap text-center">
            <div class="back-title">voucher</div>
            <h3>Daftar harga paket Voucher Hotspot</h3>
            <p>Untuk membeli voucher hotspot, harap daftar atau login terlebih dahulu.</p>
          </div>
        </div>
      </div>  
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <div class="team-wrap">
            <a class="d-inline" data-toggle="modal" data-target="#team-modal-1">
              <div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
                <img src="img/v2.png" alt="">
                <div class="team-img-mask"></div>
              </div>
            </a>
            <h6>Bronze Tier</h6>
            <p>IDR 1000 <br> Bumigora NET</p>
            <a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <div class="team-wrap">
            <a class="d-inline" data-toggle="modal" data-target="#team-modal-2">
              <div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
                <img src="img/v3.png" alt="">
                <div class="team-img-mask"></div>
              </div>
            </a>
            <h6>Silver Tier</h6>
            <p>IDR 5000 <br> Bumigora NET</p>
            <a class="app-btn" href="#"><i class="fa fa-linkedin"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="team-wrap">
            <a class="d-inline" data-toggle="modal" data-target="#team-modal-3">
              <div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
                <img src="img/v1.png" alt="">
                <div class="team-img-mask"></div>
              </div>
            </a>
            <h6>Gold Tier</h6>
            <p>IDR 20000 <br> Bumigora NET</p>
            <a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
          </div>
        </div>
        <div class="col-md-12">
          <ul class="logo-wrap">
            <li><img src="img/ubg.png" alt=""></li>
          </ul>
        </div>
        <div class="title-wrap text-center">
            <div class="back-title">voucher</div>
            <h3>Daftar Voucher yang Terjual</h3>
        </div>
        <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">User</th>
                            <th scope="col">Kode Voucher</th>
                            <th scope="col">Jenis Voucher</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach ($voucher as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row->user; ?></td>
                            <td><?php echo $row->kode; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->harga; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>

            <div class="section padding-top-bottom-big" id="pc">
    <div class="background-parallax" style="background-image: url('img/parallax-1.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap text-center">
            <div class="back-title">PC</div>
            <h3>Daftar Komputer/PC Bumigora NET</h3>
          </div>
        </div>
        <div class="col-md-12">
               
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama PC/Komputer</th>
                            <th scope="col">Jenis PC/Komputer</th>
                            <th scope="col">Tipe Ruangan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach ($pc as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row->pc; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->ruang; ?></td>
                            <td><?php echo $row->status; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>

  
  
  <div class="section padding-top-bottom-big" id="contact">
    <div class="background-parallax" style="background-image: url('img/parallax-4.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap text-center">
            <div class="back-title">contact</div>
            <h3>Hubungi kami kapan saja</h3>
            <p>Get in touch.</p>
          </div>
        </div>
      </div>  
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="contact-det text-center">
            <img src="img/contact-1.svg" alt="">
            <!-- <h6>Phone</h6>
            <p>+54 12 346 7826</p> -->
          </div>
        </div>
        <div class="col-md-3 mt-4 mt-md-0">
          <div class="contact-det text-center">
            <img src="img/contact-2.svg" alt="">
            <!-- <h6>Email</h6>
            <p>office@coeus.ico</p> -->
          </div>
        </div>
        <div class="col-md-3 mt-4 mt-md-0">
          <div class="contact-det text-center">
            <img src="img/contact-3.svg" alt="">
            <!-- <h6>Address</h6>
            <p>1093 Flushing Ave, NY</p> -->
          </div>
        </div>
      </div>
      <form id="contact-form" class="mt-5" method="post" action="contact.php" role="form">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="messages text-center"></div>
          </div>
        </div>
        <div class="controls">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="form-group text-center">
                <input id="form_name" type="text" name="name" class="form-control text-center" placeholder="Nama Awal *" required="required" data-error="First name is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
              <div class="form-group text-center">
                <input id="form_lastname" type="text" name="surname" class="form-control text-center" placeholder="Nama Akhir *" required="required" data-error="Last name is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 mt-3">
              <div class="form-group text-center">
                <input id="form_email" type="email" name="email" class="form-control text-center" placeholder="Email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-4 mt-3">
              <div class="form-group text-center">
                <input id="form_phone" type="text" required="required" name="username" class="form-control text-center" placeholder="Username *">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
              <div class="form-group text-center">
                <textarea id="form_message" name="message" class="form-control text-center" placeholder="Pesan atau saran anda *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors textarea-error"></div>
              </div>
            </div>
            <div class="col-md-8 mt-3 text-center">
              <input type="submit" class="btn btn-primary btn-send text-center" value="Kirim">
            </div>
          </div>
        </div>
      </form> 
    </div>
  </div>
  
  
  <div class="section padding-top-big">
    <div class="background-parallax" style="background-image: url('img/parallax-5.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
    
    <div class="section py-4 background-dark-blue">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 footer text-center text-lg-left">
            <p>Pemrograman Web Lanjut © 2021, Web Warnet <a href="https://themeforest.net/user/ig_design/portfolio?ref=IG_design">Canggih Wahyu Rinaldi</a></p>
          </div>
          <div class="col-lg-6 footer mt-4 mr-auto mt-lg-0 mr-lg-0 text-center text-lg-right">
            <a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-twitter"></i></a>
            <a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-linkedin"></i></a>
            <a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-facebook"></i></a>
            <a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-git"></i></a>
            <a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-pinterest-p"></i></a>
            <a class="app-btn mx-2 mr-lg-0" href="#"><i class="fa fa-paper-plane"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  <div class="scroll-to-top">to top</div>



  
  <!-- JAVASCRIPT
    ================================================== -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script> 
  <script src="js/chart-custom.js"></script>  
  <script src="js/particles.js"></script> 
  <script src="js/custom.js"></script>  
  
<!-- End Document
================================================== -->
</body>
</html>