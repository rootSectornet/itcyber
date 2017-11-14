<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>It Cyber Community</title>
  <meta name="description" content="Beberapa Dokumentasi Tentang Kami.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/bootstrap.css" media="screen,projection" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/animate.min.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/sweetalert/sweet-alert.css" media="screen,projection" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.theme.css" media="screen,projection" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/main.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/responsive.css">

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
    
    #pag a{
      padding: 15px;
      border-radius: 5px;
      border: 4px #0b1011 solid;
      background-color: #ffffff;
      color: black;
    }
    #pag a:hover{
      padding: 15px;
      border-radius: 5px;
      border: 4px #b6bec0  solid;
      background-color: #d6e2e3;
      color: black;
    }
    #pag{
      display: inline-block;
      margin-right: 10px;
    }
    .pagination .active a{
      border: 4px #00bcd4 solid !important;
      pointer-events: none;
    }
    .carousel-3d-container figure {
          margin:0;
        }

        .carousel-3d-container figcaption {
          position: absolute;
          background-color: rgba(0, 0, 0, 0.5);
          color: #fff;
          bottom: 0;
          position: absolute;
          bottom: 0;
          padding: 15px;
          font-size: 12px;
          min-width: 100%;
          box-sizing: border-box;
        }
    a .next{
      background-color: white !important;
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

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav ">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="<?php echo base_url(); ?>" class="left brand-logo"><img src="<?php echo base_url(); ?>assets/front/img/test-logo.png" alt="">
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
                    <li><a href="<?php echo base_url(); ?>about.cpp" ><i class="fa fa-users fa-fw"></i>About Us</a>
                    </li>
                    <li ><a href="<?php echo base_url(); ?>artikel.cpp"><i class="fa fa-file-text fa-fw"></i>Artikel</a>
                    </li>
                    <li class="active"><a href="<?php echo base_url(); ?>galery.cpp"><i class="fa fa-picture-o fa-fw"></i>Galery</a>
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

    <!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap"  style="padding-top: 50px; padding-bottom: 80px">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <center>
                  <h2 class="title">Galery</h2>
                  <p class="regular-text">Beberapa Dokumentasi Tentang Kami. </p></center>
                </center>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
      </div>

      <div class="portfolio-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="clearfix protfolio-item" id="protfolio-msnry">
                <?php foreach (json_decode($json) as $data): ?>
                  <?php echo $data->link ?>
                <?php endforeach ?>
                  <div id="example">
                    <carousel-3d :controls-visible="true" :clickable="true">
                    <?php $i = 0 ?>
                      <?php foreach (json_decode($json) as $data): ?>
                          <?php 
                            $link = preg_replace('/[^A-Za-z0-9\-]/', ' ', implode("-", explode(" ", $data->album)));
                           ?>
                          <slide  :index="<?= $i++;?>">
                            <figure>
                              <img src="<?= $data->link;?>">
                              <figcaption>
                                  <h2 class="p-title"><?= $data->album;?></h2>
                                  <a href="<?php echo base_url(); ?>galery/view_album/<?= $data->id_album;?>/<?= $link;?>" class="brand-text right waves-effect">View Album</a>
                              </figcaption>
                            </figure>
                          </slide>
                      <?php endforeach ?>
                    </carousel-3d>
                  </div>
                <!--/ single portfolio -->
              </ul>
              <!-- portfolio load more button-->
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #portfolio Section end -->

    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contact</h2>
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Map Start -->
                  <div class="col-sm-7">
                    <div class="map-wrapper">
                      <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.343856927539!2d106.71746401406918!3d-6.349505663885475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e586c491014b%3A0x1ad9d39830e79ffa!2sIT+CYBER+COMMUNITY!5e0!3m2!1sid!2sid!4v1504035479609" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div> <!-- Map end -->

                <!-- Contact Form start -->
                    <div class="col-sm-5">
                      <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                        <form action="<?php echo base_url(); ?>front/send_contact" method="POST" id="contactForm" validate>
                          <div class="input-field">
                            <input id="contact_name" type="text" name="contactName" class="validate input-box" required>
                            <label for="contact_name" class="input-label">Name</label>
                          </div>
                          <div class="input-field">
                            <input id="email" type="email" name="contactEmail" class="validate input-box" required>
                            <label for="email" class="input-label">Email</label>
                          </div>
                          <div class="input-field">
                            <input id="subject" type="text" name="contactSubject" class="validate input-box" required>
                            <label for="subject" class="input-label">Subject</label>
                          </div>
                          <div class="input-field textarea-input">
                            <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;" required></textarea>
                            <label for="textarea1" class="input-label">Message</label>
                          </div>
                          <div class="input-field submit-wrap clearfix">
                            <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                            <div class="right form-loader-area">
                              <svg class="circular size-20" height="20" width="20">
                                <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                              </svg>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div> 
                <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

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

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/detectmobilebrowser.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/waypoints.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/gmaps.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/materialize/js/materialize.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/jwplayer/jwplayer.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/sweetalert/sweet-alert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/common.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/vuejs/vue-3d.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/vuejs/vue.js"></script>
  <script>
    
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
    f = 0.12;

  function move() {
    y -= f;
    $('#home').css('background-position',+ y + 'px');
    requestAnimationFrame(move);
  }
  move();

})(window, jQuery);



  </script>

  <script type="text/javascript">
    
    $(window).scroll(function(){
          var nilaiScroll = $(this).scrollTop();
          $('#sct').css({
              'transform' : 'translate(' + nilaiScroll/5 + '%, 0px)'
          });
    });

    new Vue({
        el: '#example',
        data: {
          slides: 7
        },
        components: {
          'carousel-3d': Carousel3d.Carousel3d,
          'slide': Carousel3d.Slide
        }
      })
  </script>
</body>


<!-- Mirrored from www.bdinfosys.com/demo/materialx/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 15:33:09 GMT -->
</html>