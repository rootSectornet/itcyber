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
  <meta name="description" content="
Berbagi Pengetahuan

Kami berbagi pengetahuan seputar pemrograman dan teknologi.
">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >

  <!-- Stylesheets -->
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
    article{
      transition: 0.5s !important;
    }
    article:hover{
      transform: rotateX(15deg) !important;
    }
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
  </style>
</head>

<body>


  <!-- start option panel -->
  <div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
      <i class="fa fa-cog"></i>
  </div>
  <!-- end option panel -->

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div><!--preloader end-->
  <div id="app">

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
                    <li><a href="<?php echo base_url(); ?>about.cpp" ><i class="fa fa-users fa-fw"></i>About Us</a>
                    </li>
                    <li class="active"><a href="<?php echo base_url(); ?>artikel.cpp"><i class="fa fa-file-text fa-fw"></i>Artikel</a>
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
    </header><!-- header navigation end -->

    <!-- Blog Banner --> 
    <section id="banner" class="root-sec brand-bg padd-tb-73 blogpage-banner-wrap" style="padding-top: 150px;">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text">
            <div class="col-sm-12 col-md-12 col-lg-12"><center>
              <h2 class="title"><?= $tags;?></h2>
              <p class="regular-text">TAGS</p></center>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- Banner end -->

    <!-- Blog Post Container -->
    <section class="bottom-50 root-sec grey lighten-5 blogpage-posts-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix all-blog-post blog-inner with-sidebar">
            <div class="col-sm-9">
              <div class="row" id="blog-posts">
                  <?php foreach ($artikel->result() as $ar): ?>
                    <?php 
                      $link = preg_replace('/[^A-Za-z0-9\-]/', ' ', implode("-", explode(" ", $ar->judul)));
                     ?>
                    <article class="col-xs-12 col-sm-12 col-md-4 single-card-box single-post">
                      <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                        <div class="card-image">
                          <div class="card-img-wrap" style="height: 283px">
                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                              <a href="single.html"><img class="activator" src="<?php echo base_url(); ?>assets/backend/image/artikel/<?= $ar->gambar?>" alt="" style="height: 150px;">
                              </a>
                            </div>
                            <div class="post-body">
                              <a href="<?php echo base_url(); ?>/detail/<?= $ar->id_artikel;?>/<?= $link;?>" class="post-title-link brand-text"><h2 class="post-title"><?= $ar->judul;?></h2></a>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix card-content">
                          <a href="#" class="left"><i class="fa fa-tag" aria-hidden="true"></i><span class="numb"><?= $tags;?></span></a>
                          <a href="<?php echo base_url(); ?>/detail<?= $ar->id_artikel;?>/<?= $link;?>" class="brand-text right waves-effect">Read More</a>
                        </div>
                      </div>
                    </article> <!-- ./single blog post end -->
                  <?php endforeach ?><!--./single post-->
              </div>
              <div class="clearfix"><br>
                <div class="col-md-12">
                    <?php  echo $this->pagination->create_links();; ?>
                </div>
              </div>
            </div>

            <!-- Sidebar -->
            <div class="col-sm-3">
              <div class="primary-sidebar">
                <aside class="single-widget">
                  <form>
                    <div class="input-field">
                      <input type="text" name="cari" class="validate input-box" style="color: black" id="cari">
                      <label class="input-label"><i class="fa fa-search fa-fw"></i>  Search ...                    </label>
                    </div>
                  </form>
                </aside>
                <aside class="single-widget">
                  <h2 class="widget-title">Popular Artikel</h2>
                  <ul>
                  <?php foreach ($popular_artikel->result() as $pop): ?>
                    <?php 
                      $link_pop = preg_replace('/[^A-Za-z0-9\-]/', ' ', implode("-", explode(" ", $pop->judul)));
                     ?>
                    <li>
                      <a href="<?php echo base_url(); ?>detail/<?= $pop->id_artikel;?>/<?= $link_pop;?>"><?= $pop->judul;?></a>
                      <span><?=  date('d F Y', strtotime($pop->tanggal));?></span>
                    </li>
                  <?php endforeach ?>
                  </ul>
                </aside>
                <aside class="single-widget">
                  <h2 class="widget-title">TAGS</h2>
                  <div class="widget-text">
                    <?php foreach ($tag->result() as $t): ?>
                      <?php $taglink = preg_replace('/[^A-Za-z0-9\-]/', ' ', implode("-", explode(" ", $t->tag))); ?>
                      <a href="<?php echo base_url(); ?>artikel/tag/<?= $t->id_tag;?>/<?= $taglink;?>.cpp" class="tags"><?= $t->tag;?></a>
                    <?php endforeach ?>
                  </div>
                </aside>
              </div>
            </div> <!-- ./sidebar end -->
          </div>
        </div>
      </div> <!-- ./container end -->
    </section> <!-- ./Blog Post container end-->

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
  </div>


<!-- JavaScripts -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/materialize/js/materialize.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/jwplayer/jwplayer.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/common.js"></script>
  <script>
    $(document).ready(function(){
        $('#pag a').click(function(){
          $('#pag a').addClass("active");
        });
    });
       $(document).ready(function() {
        $('#cari').keyup(function() { 
            var cari = $('#cari').val(); 
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>searching_artikel', 
                data: 'cari=' + cari,
                success: function(response) { 
                    $('#blog-posts').html(response); 
                }
            });
        });

    });
  </script>
</body>

</html>