 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Galery   
                            <button type="button" class="btn btn-success btn-waves" title="Tambah"  data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-square fa-fw"></i> Tambah Album</button><!-- Modal -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Album </li>
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
                  <th>Nama Album</th>
                  <th>Tanggal</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($album->result() as $row): ?>
                      <tr>
                        <td><?= $i++;?></td>
                        <td><?= $row->album;?></td>
                        <td><?= $row->tanggal;?></td>
                        <td>
                            <a  href="<?php echo base_url(); ?>Itcyb3r/media/view_album/<?= $row->id_album;?>" class="btn btn-info btn-waves" data-toggle="tooltip" data-placement="top" title="Lihat Album !"><i class="fa fa-eye fa-fw"></i></a>
                            <button type="button" class="btn btn-warning btn-waves" title="Edit"  data-toggle="modal" data-target="#edit<?= $i;?>"><i class="fa fa-pencil"></i></button><!-- Modal -->
                              <div class="modal fade" id="edit<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Album</h4>
                                    </div>
                                      <?php $atributes = array('role' => 'form');
                                          echo form_open('Itcyb3r/media/edit_album',$atributes); 
                                      ?>
                                        <div class="modal-body">
                                            <div class="box-body">
                                              <div class="form-group">
                                                <label for="caption">Nama Album : </label>
                                                    <input type="text" class="form-control" required name="album" id="album" value="<?= $row->album;?>">
                                              </div>
                                              <input type="hidden" name="id" value="<?= $row->id_album;?>" required>
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
                            <a  href="<?php echo base_url(); ?>Itcyb3r/media/delete_album/<?= $row->id_album;?>" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Delete !" onclick="return ConfirmDialog()" ><i class="fa fa-trash fa-fw"></i></a>
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
            <h4 class="modal-title" id="myModalLabel">Tambah Album</h4>
          </div>
            <?php echo form_open('Itcyb3r/media/tambah_album'); ?>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="caption">Nama Album : </label>
                        <input type="text" class="form-control" required name="album" id="album" >
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
  var x=confirm("jika anda menghapus data ini maka seluruh foto dalam album ini akan ikut di hapus <br>Apakah anda yakin ingin menghapus data ini?")
  if (x) {
    return true;
  } else {
    return false;
  }
}
</script>