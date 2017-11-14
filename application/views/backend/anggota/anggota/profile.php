 <?php foreach ($anggota->result() as $rows):
   $id = $rows->id_anggota;
   $nama = $rows->nama;
   $email = $rows->email;
   $id_angkatan = $rows->id_angkatan;
   $id_jabatan = $rows->id_jabatan;
   $st_aktif = $rows->status_active;
   $st_jabatan = $rows->status_jabatan;
   $alamat = $rows->alamat;
   $telp = $rows->no_telp;
   $tgl_lahir = $rows->tgl_lahir;
   $jk = $rows->jenis_kelamin;
   $keahlian = $rows->keahlian;
   $pekerjaan = $rows->pekerjaan;
   $active = "";
   $angkatan = $rows->angkatan;
   $jabatan = $rows->jabatan;
   $foto = $rows->foto;
 endforeach ?>
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<div class="content-wrapper">
    <section class="content-header">
        <h1>User Profile</h1><?php echo $this->session->flashdata('anggota'); ?>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Anggota</li>
        <li></li>
      </ol>
    </section>
      <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img style="width:168px; height: 169px;" class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/backend/image/anggota/<?php echo $foto; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $nama;?></h3>

              <p class="text-muted text-center"><?= $pekerjaan;?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Post Artikel</b> <a class="pull-right"><?= $artikel->num_rows();?></a>
                </li>
                <li class="list-group-item">
                  <b>Post Galery</b> <a class="pull-right"><?= $galery->num_rows();?></a>
                </li>
              </ul>

              <button type="button" class="btn btn-primary btn-block" onclick="tampil()"><b>View Detail</b></button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary" id="details">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-hand-o-right margin-r-5"></i> ID Anggota</strong>
              <p class="text-muted">
                <?= $id;?>
              </p>

              <hr>
              <strong><i class="fa fa-hand-o-right margin-r-5"></i> Angkatan</strong>
              <p class="text-muted">
                <?= $angkatan;?>
              </p>

              <hr>
              <strong><i class="fa fa-hand-o-right margin-r-5"></i> Jabatan</strong>
              <p class="text-muted">
                <?= $jabatan;?>
              </p>

              <hr>
              <strong><i class="fa fa-hand-o-right margin-r-5"></i> Email</strong>
              <p class="text-muted">
                <?= $email;?>
              </p>

              <hr>
              <strong><i class="fa fa-hand-o-right margin-r-5"></i> NO. Telp</strong>
              <p class="text-muted">
                <?= $telp;?>
              </p>

              <hr>
              <strong><i class="fa fa-hand-o-right margin-r-5"></i> Tanggal lahir</strong>
              <p class="text-muted">
               <?=  date('d F Y', strtotime($tgl_lahir ));?>
              </p>

              <hr>
              <strong><i class="fa fa-hand-o-right margin-r-5"></i> Jenis Kelamin</strong>
              <p class="text-muted">
                <?= $jk;?>
              </p>

              <hr>

              <strong><i class="fa fa-hand-o-right margin-r-5"></i> Alamat</strong>

              <p class="text-muted"><?= $alamat;?></p>

              <hr>

              <strong><i class="fa fa-hand-o-right margin-r-5"></i> Keahlian</strong>

              
                <p class="text-muted"><?= $keahlian;?></p>
                

              <hr>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <?php if ($id == $this->session->userdata('id')): ?>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
              <?php endif ?>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <?php foreach ($artikel->result() as $ar): ?>
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/backend/image/anggota/<?php echo $foto; ?>" alt="user image">
                              <span class="username">
                                <a href="#"><?= $nama;?></a>
                              </span>
                          <span class="description">Shared Articels - <?=  date('d F Y', strtotime($ar->tanggal));?></span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          <?= $ar->judul;?>
                        </p>
                  <ul class="list-inline">
                    <li>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" href="<?php echo base_url(); ?>Itcyb3r/news/detail_artikel/<?= $ar->id_artikel?>.cpp">Read more</a>
                      </div>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-eye margin-r-5"></i><?= $ar->hit;?> &nbsp; Dilihat</a></li>
                  </ul>
                      </div>
                <?php endforeach ?>
              </div>

              <div class="tab-pane" id="settings">
              <?php echo form_open('itcyb3r/anggota/update_profil'); ?>
                <input type="hidden" name="id" value="<?= $id;?>">
                <div class="form-group">
                  <label for="nama" class="control-label">Nama : </label>
                  <input type="text" name="nama" class="form-control" value="<?= $nama;?>">
                </div>
                <div class="form-group">
                  <label for="email"> Email : </label>
                  <input type="email" name="email" class="form-control" value="<?= $email;?>">
                </div>
                <div class="form-group">
                  <label for="telp"> No. Telp : </label>
                  <input type="text" name="telp" class="form-control" value="<?= $telp;?>">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir"> Tgl Lahir : </label>
                  <input type="text" name="tgl_lahir" class="form-control" id="datepicker" value="<?=  date('d F Y', strtotime($tgl_lahir ));?>">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin : </label>
                  <select name="jk" class="form-control">
                    <option selected disabled ><?= $jk;?></option>
                    <option value="Laki - Laki ">Laki - Laki </option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pekerjaan">Pekerjaan : </label>
                  <input type="text" name="pekerjaan" class="form-control" value="<?= $pekerjaan;?>">
                </div>
                <div class="form-group">
                  <label for="keahlian">Keahlian : </label>
                  <input type="text" name="keahlian" value="<?= $keahlian;?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat : </label>
                  <textarea name="alamat" class="form-control" rows="3"><?= $alamat;?></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-info">Update</button>
                </div>
              <?php echo form_close(); ?>
              <?php echo form_open('itcyb3r/anggota/update_pass'); ?>
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Change Password</h3>
                    </div>
                    <!-- /.box-header -->
                <input type="hidden" name="id" value="<?= $id;?>">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="pass">Password : </label>
                        <input type="password" name="pass" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" name="simpan_pass" class="btn btn-warning">Update Password</button>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
              <?php echo form_close(); ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <!-- /.content -->
</div>

<script src="<?php echo base_url();?>assets/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#details').hide();
  });
  function tampil(){
    $('#details').toggle(2000);
  }
</script>  
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
     dateFormat: "yy-mm-dd"
    });
  } );
  </script>
