<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from www.bdinfosys.com/demo/materialx/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 15:34:48 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>It Cyber Community</title>
  <meta name="description" content="Information and Technology of Cyber Universitas Pamulang Di Singkat IT Cyber Unpam adalah sebuah komunitas yang memiliki konsep kebersamaan serta rasa kekeluargaan dalam membangun dan mengembangkan bersama ilmu yang berkaitan dengan Teknologi komputer.

komunitas IT Cyber tidak akan pernah membatasi member ataupun anggota yang ingin bergabung dengan rasa ingin bersama-sama belajar serta mengembangkan potensi pada perkembangan dunia teknologi terkini.

Komunitas IT-cyber adalah satu satu komunitas IT yang berada di daerah Tangerang-Banten, dan Berdiri di Kampus Tercinta Universitas Pamulang.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >
  
  <!-- Stylesheets-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/bootstrap.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.theme.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/main.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/responsive.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/blog.css">
  
  <!-- Choose your default colors -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/colors/color1.css">
  <!-- <link rel="stylesheet" href="assets/css/colors/color2.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color3.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color4.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color5.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color6.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color7.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color8.css"> -->

  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
  <![endif]-->
  <style type="text/css">
    .muter:hover{
        transform: rotate(360deg);
    }
    .muter{
      border-radius: 50%;
       padding: 30px;
       box-shadow: 0 0 10px #fffddd;
        transition: 1s;
    }
    .fixed{
      position: fixed;
    }
      #home {
          background-color: #ddd;
      }
    #scr{
      padding-bottom: 100px;/*! padding: ; */
      padding-top: 81px;
    }
    .tabs li.tab .active{
      background-color: #daeaf9;
    }
    .indicator{
      width: 33.333%;
    }
     @media (max-width: 800px){
      #scr{
        padding-top: -1px !important;
      }
    }
  </style>
</head>

<body>

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div><!--preloader end-->

  
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav ">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="<?php echo base_url(); ?>" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="<?php echo base_url(); ?>assets/front/img/test-logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="<?php echo base_url(); ?>assets/front/img/s.png" alt="">
                        </div>
                        <h3>IT CYBER COMMUNITY</h3>
                        <h5>Universitas Pamulang</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-fw"></i> Home</a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>about.cpp"><i class="fa fa-users fa-fw"></i>About US</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>artikel.cpp"><i class="fa fa-file-text fa-fw"></i>Artikel</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>galery.cpp"><i class="fa fa-picture-o fa-fw"></i>Galery</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>portfolio.cpp"><i class="fa fa-laptop fa-fw"></i>Portfolio</a>
                    </li>
                  </ul>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Blog Banner --> 
    <section id="banner" class="root-sec brand-bg padd-tb-73 blogpage-banner-wrap" style="padding-top: 97px; padding-bottom: 25px; margin-bottom: 0;>
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text">
            <div class="col-sm-12 col-md-12 col-lg-12"><center>
              <h2 class="title">TENTANG KAMI</h2>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- Banner end -->
    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
     
          <div class="row" style="background-color: #eae5e5">
            <div class="col s12">
              <ul class="tabs" style="background-color: #127ad6 ">
                <li class="tab col s3"><a href="#test1" class="active">About us</a></li>
                <li class="tab col s3"><a href="#test2">Sejarah</a></li>
                <li class="tab col s3"><a href="#test3">VISI & MISI</a></li>
              </ul>
            </div>
            <div id="test1" class="col s18"> 
              <div class="col-md-12" style="padding-top: 50px">
                    <div class="col-md-1">
                      
                    </div>
                    <div class="col-sm-12 col-md-10">
                      <div class="person-about">
                      <h3 class="about-subtitle">Tentang It Cyber Universitas Pamulang</h3>
                      <p style="padding-bottom: 0; margin-bottom: 0; text-align: justify; color: #111">Information and Technology of Cyber Universitas Pamulang Di Singkat IT Cyber Unpam adalah sebuah komunitas yang memiliki konsep kebersamaan serta rasa kekeluargaan dalam membangun dan mengembangkan bersama ilmu yang berkaitan dengan Teknologi komputer. </p>
                      <p style="margin-top: 0; padding-top: 0; text-align: justify; padding-bottom: 0; margin-bottom: 0;color: #111">komunitas IT Cyber tidak akan pernah membatasi member ataupun anggota yang ingin bergabung dengan rasa ingin bersama-sama belajar serta mengembangkan potensi pada perkembangan dunia teknologi terkini.</p>
                      <p style="margin-top: 0; padding-top: 0; text-align: justify; color: #111">Komunitas IT-cyber adalah satu satu komunitas IT yang berada di daerah Tangerang-Banten, dan Berdiri di Kampus Tercinta Universitas Pamulang.</p>
                      </div>
                    </div>
                  </div>
            </div>
            <div id="test2" class="col s12">
              
                  <div class="col-md-12"   style="padding-top: 50px">
                    <div class="col-md-1">
                      
                    </div>
                    <div class="col-sm-12 col-md-10">
                      <div class="person-about">
                      <h3 class="about-subtitle">Sejarah</h3>
                      <p style="padding-bottom: 0; margin-bottom: 0; text-align: justify; color: #111">IT CYBER COMMUNITY UNIVERSITAS PAMULANG berdiri pada tanggal 19 Juni 2010. Berawal dari beberapa mahasiswa Universitas Pamulang khususnya Fakultas Teknik Informatika yang gelisah akan minimnya fasilitas dan pembelajaran yang ada di lingkungan kampus pada saat itu. </p>
                      <p style="margin-top: 0; padding-top: 0; text-align: justify; color: #111">Kami pun menyadari bahwa Fakultas Teknik Informatika Memang tebilang cukup baru. Maka dari itu kami yang tergabung dari mahasiswa pagi dan malam berinisiatif untuk membuat sebuah pembelajaran atau kelompok belajar yang berbentuk kommunitas atas dasar kekeluargaan, komitmen, dan satu tujuan yang sama yaitu<br /></p>
                      </div>
                    </div>
                  </div>
            </div>
            <div id="test3" class="col s12">
              
                  <div class="col-md-12"    style="padding-top: 50px">
                    <div class="col-sm-6 col-md-6 col-xs-6">
                      <div class="person-info">
                        <h3 class="about-subtitle">VISI</h3>
                        <h5 style="color: #111"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Menjadikan Komunitas IT Cyber mampu bersaing dengan komunitas lain.</h5>
                        <h5  style="color: #111"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Menjadikan Komunitas IT Cyber sebagai sarana pembelajaran yang terbuka.</h5>
                        <h5  style="color: #111"><i class="fa fa-hand-o-right" aria-hidden="true"></i>   Komunitas IT Cyber menciptakan kader yang berkualitas tingggi.</h5>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xs-6">
                      <div class="person-info">
                        <h3 class="about-subtitle">MISI</h3>
                        <h5  style="color: #111"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Melaksanakan pembelajaran dan bimbingan secara efektif dan kompetitif.</h5>
                        <h5  style="color: #111"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Mengembangkan teknologi informasi yang dapat bermanfaat bagi masyarakat, lingkungan kampus dengan cara membangun jaringan sesama kommunitas.</h5>
                        <h5  style="color: #111"><i class="fa fa-hand-o-right" aria-hidden="true"></i>     Mendorong dan membantu kader untuk mengenali potensi dirinya sehingga dapat dikembangkan secara optimal, dan menjadi generasi yang mampu bersaing di dunia kerja.</h5>
                      </div>
                  </div>
                 </div>
            </div>
          </div>
    </section>
    <!-- #home Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="https://www.facebook.com/groups/IT.Cyber.universitas.Pamulang/" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://www.instagram.com/itcyberunpam/" class="tooltips tooltipped instagram" data-position="top" data-delay="50" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped youtube" data-position="top" data-delay="50" data-tooltip="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped github" data-position="top" data-delay="50" data-tooltip="Github"><i class="fa fa-github-square" aria-hidden="true"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>Copyright &copy; 2017 <a href="<?php echo base_url(); ?>">IT CYBER COMMUNITY</a> All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->
  </main> <!--#app end -->


  <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/materialize/js/materialize.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/jwplayer/jwplayer.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/common.js"></script>  <!-- <script>
    
(function(window, $) {

  window.requestAnimFrame = (function(){
    return  window.requestAnimationFrame       ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame    ||
            function( callback ){
              window.setTimeout(callback, 1000 / 40);
            };
  })();
  
  var y = 0,
    f = 0.5;

  function move() {
    y -= f;
    $('#home').css('background-position',+ y + 'px');
    requestAnimationFrame(move);
  }
  move();

})(window, jQuery);



  </script> -->
  <script type="text/javascript">
    
    $(window).scroll(function(){
          var nilaiScroll = $(this).scrollTop();
          $('#sct').css({
              'transform' : 'rotate(' + nilaiScroll + 'deg)'
          });
    });
  </script>
</body>
</body>


<!-- Mirrored from www.bdinfosys.com/demo/materialx/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 15:34:54 GMT -->
</html>