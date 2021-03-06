 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Galery   
                            <button type="button" class="btn btn-success btn-waves" title="Tambah"  data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-square fa-fw"></i> Tambah Foto</button><!-- Modal -->
                            <a href="<?php echo base_url(); ?>itcyb3r/media.cpp" class="btn btn-info">Kembali</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Album <?php foreach ($album->result() as $al): ?>
          <?= $al->album;?>
        <?php endforeach ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('sukses_galery'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Caption</th>
                  <th>Gambar</th>
                  <th>Link</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($galery->result() as $row): ?>
                      <tr>
                        <td><?= $i++;?></td>
                        <td><?= $row->caption;?></td>
                        <td><img src="<?= $row->link;?>" width="40px" height="40px;"></td>
                        <td><?= $row->link;?></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-waves" title="Edit"  data-toggle="modal" data-target="#edit<?= $i;?>"><i class="fa fa-pencil"></i></button><!-- Modal -->
                              <div class="modal fade" id="edit<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Galery</h4>
                                    </div>
                                      <?php $atributes = array('role' => 'form');
                                          echo form_open('Itcyb3r/media/edit_galery',$atributes); 
                                      ?>
                                        <div class="modal-body">
                                            <div class="box-body">
                                              <div class="form-group">
                                                <label for="caption">Caption : </label>
                                                    <input type="text" class="form-control" required name="caption" id="caption" value="<?= $row->caption;?>">
                                              </div><br><br>
                                              <div class="form-group">
                                                <label for="link">Link : </label>
                                                    <input type="text" class="form-control" required name="link" id="link" value="<?= $row->link;?>">
                                              </div>
                                              <input type="hidden" name="id" value="<?= $row->id_galery;?>" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                      <?php echo form_close(); ?>
                                  </div>
                                </div>
                              </div>
                            <a  href="<?php echo base_url(); ?>Itcyb3r/media/delete_galery/<?= $row->id_galery;?>" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Delete !" onclick="return ConfirmDialog()" ><i class="fa fa-trash fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Modal tambah-->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Galery</h4>
          </div>
            <?php echo form_open('Itcyb3r/media/tambah_galery'); ?>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="caption">Caption : </label>
                        <input type="text" class="form-control" required name="caption" id="caption" >
                  </div>
                  <div class="form-group">
                    <label for="link">Link : </label>
                        <input type="text" class="form-control" required name="link" id="link" >
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="id_album" class="form-control" value="<?= $id_album;?>">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  <!-- end modal tambah --> 
<script type="text/javascript">

function ConfirmDialog() {
  var x=confirm("Apakah anda yakin ingin menghapus data ini?")
  if (x) {
    return true;
  } else {
    return false;
  }
}
</script>