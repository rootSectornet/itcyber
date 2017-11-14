
<?php 
  foreach ($detailArtikel->result() as $de) { 
    $id_artikel = $de->id_artikel;
   $judul = $de->judul;
   $gambar = $de->gambar;
   $author = $de->nama;
   $tags = $de->tag;
   $tanggal = $de->tanggal;
   $isi = $de->isi;
  }

  
 ?>
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
  <meta name="description" content="<?= $judul;?>">
  <meta author="ITCYBER">
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
</head>

<body>


  <!-- start option panel -->
<!--   <div id="switch">
      <div class="content-switcher">
          <p class="brand-text">SHARE THIS ARTICELS</p>
          <ul class="header">
              <li>
                  <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank" class="btn"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                 <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank" class="btn"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                  <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" class="btn"><i class="fa fa-twitter"></i></a>
              </li>
          </ul>
          <div id="hide">
              <i class="fa fa-times"></i>
          </div>
      </div>
  </div>
  <div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
      <i class="fa fa-share-alt" aria-hidden="true"></i>
  </div> -->
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
                    <li><a href="<?php echo base_url(); ?>about.cpp"><i class="fa fa-users fa-fw"></i>About US</a>
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

 <!-- Banner start -->
    <section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap" style="padding-top: 150px;">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text blog-single-banner" id="hilang">
            <div class="col-md-12">
              <h2 class="title"><?= $judul;?></h2>
              <ul class="clearfix blog-post-meta">
                <li>By <a href="#"><?= $author;?></a>
                </li>
                <li><?=  date('d F Y', strtotime($tanggal ));?></li>
                <li><?= $get_coment->num_rows();?> Comments
                </li>
                <li><a href="#"><?= $tags;?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- ./Banner end -->

     <!-- Blog Post Container-->
    <section id="all-posts" class="root-sec grey lighten-5 blogpage-posts-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix all-blog-post blog-inner with-sidebar">

          <!-- post container start-->
            <div class="col-sm-8" id="blog">
              <article class="single-post-page">
                <div class="thumb-wrap">
                  <img src="<?php echo base_url(); ?>assets/backend/image/artikel/<?= $gambar?>" alt="">
                </div>
                <div class="single-post-content">
                  <?= $isi;?>
                </div>
                <div class="clearfix post-footer">
                  <a href="#" class="left " ><i class="fa fa-eye" aria-hidden="true"></i> <span class="numb"> <?= $get_statistik;?> Kali Dilihat</span></a>
                  <ul class="clearfix right share-post">
                  <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=136&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=1278342512238850" width="136" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                  </ul>
                </div>

                <div class="comment-reply-section">
                  <h2 class="com-title"><?= $get_coment->num_rows();?> Comments</h2>
                  <div class="comment-list-wrapper">
                    <ul class="comment-list" id="coment-list">
                      <?php foreach ($get_coment->result() as $com): ?>
                          <li>
                            <div class="clearfix card">
                              <div class="left comment-img">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/front/img/user_icon.png" alt="">
                                </a>
                              </div>
                              <div class="card-content comment-content">
                                <div class="comment-meta">
                                  <p class="author"><?= $com->user_coment;?> <span>says:</span>
                                  </p>
                                  <p class="date"><?=  date('d F Y', strtotime($com->tanggal));?></p>
                                </div>
                                <div class="comment-text">
                                  <p><?= $com->coment;?></p>
                                </div>
                              </div>
                            </div>
                          </li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>
                <div class="contact-form  comment-reply-form">
                  <h2 class="com-title">Comment This Artikel</h2>
                    <div class="input-field">
                      <input id="name" type="text" class="validate input-box" id="name" required>
                      <label for="name" class="input-label">Name*</label>
                    </div>
                    <div class="input-field textarea-input">
                      <textarea id="comment" class="materialize-textarea" style="height: 22px;" id="comment" required></textarea>
                      <label for="comment" class="input-label">Comment</label>
                    </div>
                    <div class="input-field submit-wrap">
                      <button type="button" id="send_comment" class="waves-effect waves-light btn-large brand-bg white-text comm-submit regular-text">SEND COMMENT</button>

                    </div>
                </div>
              </article>
            </div> <!-- ./post container end-->

            <!-- Sidebar -->
            <div class="col-sm-4">
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
                      <a href="<?php echo base_url(); ?>tags/<?= $t->id_tag;?>/<?= $taglink;?>.cpp" class="tags"><?= $t->tag;?></a>
                    <?php endforeach ?>
                  </div>
                </aside>
              </div>
            </div> <!-- ./sidebar end -->
          </div>
        </div>
      </div> <!-- ./container end-->
    </section>  <!-- ./Blog Post Container end-->

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
  </div> <!--#app end -->


  <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/materialize/js/materialize.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/libs/jwplayer/jwplayer.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/common.js"></script>
  <script>
    $(document).ready(function(){
        $('#send_comment').click(function(){
            var id = <?= $id_artikel;?>;
            var nama = $('#name').val();
            var coment = $('#comment').val();
            $.ajax({
              type: 'POST', 
              url: '<?php echo base_url(); ?>input_comment', 
              data: 'id=' + id + '&nama=' + nama + '&coment=' + coment,
              success: function(response) { 
                $('#coment-list').html(response);
              }
            });
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
                    $('#blog').html(response);
                    $('#blog').show(3000); 
                    $('#hilang').hide(2000);
                }
            });
        });

    });
  </script>
</body>


<!-- Mirrored from www.bdinfosys.com/demo/materialx/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 15:34:54 GMT -->
</html>