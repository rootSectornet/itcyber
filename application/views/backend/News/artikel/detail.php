  <?php 
 foreach ($s->result() as $sa) {
  ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Artikel   
        <a href="<?php echo base_url(); ?>Itcyb3r/news/tambah_artikel.cpp" class="btn btn-success btn-waves" title="Tambah"><i class="fa fa-plus-square fa-fw"></i> Tambah</a><!-- Modal -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Artikel</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2><?= $sa->judul;?></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
              
              <div class="col-md-12">
               <img src="<?php echo base_url(); ?>assets/backend/image/artikel/<?= $sa->gambar?>">
              </div>
              <div class="col-md-1">
                <span class="label label-default"><i class="fa fa-calendar-o fa-fw"></i> <?= $sa->tanggal;?></span>
              </div>
              <div class="col-md-1">
                <span class="label label-default"><i class="fa fa-user fa-fw"></i> <?= $sa->nama;?></span>
              </div>
              <div class="col-md-1">
                <span class="label label-default"><i class="fa fa-tag fa-fw"></i> <?= $sa->tag;?></span>
              </div><br><br><br><br><br>

            </div>
            <div class="clearfix">
              
            </div>
              <div class="row">
                <br><br><br>
              <div class="col-md-12">
                <?= $sa->isi;?>
              </div>
              </div>
              <div class="col-md-2">
                <a href="<?php echo base_url(); ?>Itcyb3r/news/" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Kembali">Kembali</a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title"><?= $get_coment->num_rows();?> COMMENTS</h3>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <?php foreach ($get_coment->result() as $com): ?>
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/front/img/user_icon.png" alt="user image" class="online">

                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i><?=  date('d F Y', strtotime($com->tanggal));?></small>
                        <?= $com->user_coment;?> 
                      </a>
                      <?= $com->coment;?>
                    </p>
                  <!-- /.item -->
                </div>
              <?php endforeach ?>
            <!-- /.chat -->
            <div class="box-footer">
            <?php echo form_open(); ?>
              <div class="input-group">
                <input class="form-control" placeholder="Type message..." name="coment" required>
                <div class="input-group-btn">
                  <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            <?php echo form_close(); ?>
            </div>
          </div>
          <!-- /.box (chat box) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
 }
  ?>
