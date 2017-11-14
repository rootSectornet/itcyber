<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from www.bdinfosys.com/demo/materialx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 15:34:55 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>It Cyber Community</title>
  <meta name="description" content="">
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
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/colors/color7.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/colors/color8.css"> -->

  <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>assets/front/js/html5shiv.js"></script>
  <![endif]-->
  <style type="text/css">
#gallery img {
  margin: 8px;
  cursor: pointer;
  border-radius: 3px;
  width: 341px;
  height: 300px;
  border: 2px solid  cadetblue;;
}

#gallery img:hover {
  margin: 8px;
  opacity: .8;
}

header h1 {
  font-weight: 700;
  margin-left: 8px;
}

#buttons button {
  border: 1px solid #efefef;
  margin-right: 8px;
  border: 0;
  padding: 8px;
  border-radius: 3px;
  background-color: #4bc9c9;
}

#buttons button.active {
  background-color: #bbb;
  color: #111;
}

#buttons {
  margin: 8px;
  padding-bottom: 8px;
}

button:hover{
  background-color: #111;
  color: #fff;
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
                    <li><a href="<?php echo base_url(); ?>galery.cpp"><i class="fa fa-picture-o fa-fw"></i>Galery</a>
                    </li>
                    <li class="active"><a href="<?php echo base_url(); ?>portfolio.cpp"><i class="fa fa-laptop fa-fw"></i>Portfolio</a>
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
                <h2 class="title">PORTFOLIO</h2>
                  <p class="regular-text">Beberapa Yang Sudah Beberapa Kita kerjakan. </p></center>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
      </div>       
          <div class="container">
            <div id="buttons"></div>
          <div class="row">
            <div class="col-sm-12">
              <ul class="clearfix protfolio-item" id="gallery">
                <?php foreach ($portfolio->result() as $port): ?>
                    <!-- Single Portfolio-->
                      <li class="single-port-item category-1 category-3">
                          <div class="protfolio-image">
                              <img data-tags="<?= $port->jenis;?>" src="<?= $port->link;?>" alt="" />
                            <div class="protfolio-content waves-effect waves-block waves-light">
                              <div class="protfolio-content__inner">
                                <h2 class="p-title"><?= $port->caption;?></h2>
                              </div>
                            </div>
                            <div class="p-overlay"></div>
                          </div>
                        </a>
                      </li>
                      <!--/ single portfolio -->
                <?php endforeach ?>
              </ul>
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
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/materialize/js/materialize.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/jwplayer/jwplayer.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/sweetalert/sweet-alert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/common.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/main.js"></script>
  <script type="text/javascript">
    (function() {
  var $imgs = $('#gallery img');
  var $buttons = $('#buttons');
  var tagged = {};

  $imgs.each(function() {
    var img = this;
    var tags = $(this).data('tags');

    if (tags) {
      tags.split(',').forEach(function(tagName) {
        if (tagged[tagName] == null) {
          tagged[tagName] = [];
        }
        tagged[tagName].push(img);
      })
    }
  })

  $('<button/>', {
    text: 'Show All',
    class: 'active',
    click: function() {
      $(this)
        .addClass('active')
        .siblings()
        .removeClass('active');
      $imgs.show();
    }
  }).appendTo($buttons);

  $.each(tagged, function(tagName) {
    var $n = $(tagged[tagName]).length;
    $('<button/>', {
      text: tagName + '(' + $n + ')',
      click: function() {
        $(this)
          .addClass('active')
          .siblings()
          .removeClass('active');
        $imgs
          .hide('slow')
          .filter(tagged[tagName])
          .show('slow');
      }
    }).appendTo($buttons);
  });
}())
  </script>
</body>


<!-- Mirrored from www.bdinfosys.com/demo/materialx/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 15:33:09 GMT -->
</html>