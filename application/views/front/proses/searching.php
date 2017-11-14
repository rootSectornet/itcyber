<?php if ($searching->num_rows() == 0): ?>
  <div class="col-sm-12">
    <h3 style="color: #000; text-align: center; font-size: 18px">Data Tidak Di temukan Untuk : <?= $cari;?></h3>
  </div>
<?php endif ?>
  <?php foreach ($searching->result() as $ar): ?>
    <?php 
      $link = preg_replace('/[^A-Za-z0-9\-]/', ' ', implode("-", explode(" ", $ar->judul)));
     ?>
    <article class="col-sm-6 col-md-3 single-card-box single-post">
      <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
        <div class="card-image">
          <div class="card-img-wrap" style="height: 283px">
            <div class="blog-post-thumb waves-effect waves-block waves-light">
              <a href="single.html"><img class="activator" src="<?php echo base_url(); ?>assets/backend/image/artikel/<?= $ar->gambar?>" alt="" style="height: 150px;">
              </a>
            </div>
            <div class="post-body">
              <a href="<?php echo base_url(); ?>detail/<?= $ar->id_artikel;?>/<?= $link;?>" class="post-title-link brand-text"><h2 class="post-title"><?= $ar->judul;?></h2></a>
            </div>
          </div>
        </div>
        <div class="clearfix card-content">
          <a href="#" class="left"><i class="fa fa-tag" aria-hidden="true"></i><span class="numb"><?= $ar->tag;?></span></a>
          <a href="<?php echo base_url(); ?>detail/<?= $ar->id_artikel;?>/<?= $link;?>" class="brand-text right waves-effect">Read More</a>
        </div>
      </div>
    </article> <!-- ./single blog post end -->
  <?php endforeach ?>