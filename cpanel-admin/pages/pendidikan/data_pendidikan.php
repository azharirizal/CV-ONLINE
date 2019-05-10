<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-graduation-cap"></i> DATA PENDIDIKAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li class="active"><i class="fa fa-graduation-cap"></i> DATA PENDIDIKAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_pendidikan" class="btn btn-primary" role="button" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="pendidikan" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>JURUSAN</th>
                  <th>INSTANSI</th>
                  <th>TAHUN LULUS</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $no=0;
                $id=$_SESSION['id_biodata'];
                $query=mysql_query("SELECT * FROM education WHERE id_biodata='".$id."' ORDER BY id_education DESC");
                while ($row=mysql_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['major'];?></td>
                  <td><?php echo $row['institute']; ?></td>
                  <td><?php echo $row['graduate']; ?></td>
                  <td>
                    <a href="#" id="<?php echo $row['id_education']; ?>" class="btn btn-info open_modal" role="button" title="Detail Data"><i class="fa fa-search"></i></a>
                    <a href="index.php?page=ubah_pendidikan&id=<?php echo $row['id_education']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="fa fa-edit"></i></a>
                    <a href="#" onclick="confirm_modal('pages/pendidikan/hapus_pendidikan.php?id=<?=$row['id_education'];?>')" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>

                <?php } ?>

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

<!-- ModalEdit -->
<div id="ModalEdit" class="modal fade" role="dialog">

</div>

<!-- ModalDelete --> 
<div id="ModalDelete" class="modal fade" role="dialog">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:200px;overflow:hidden;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" style="text-align:center;">Hapus Data ?</h4>
          </div>

          <div class="modal-footer" style="text-align:center;">
            <a href="#" class="btn btn-danger" id="delete_link"><i class="fa fa-check"></i> Hapus</a>
            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup ModalEdit --> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "pages/pendidikan/detail_pendidikan.php",
                   type: "GET",
                   data : {id: m,},
                   success: function (ajaxData){
                   $("#ModalEdit").html(ajaxData);
                   $("#ModalEdit").modal('show',{backdrop: 'true'});
                  }
              });
          });
      });
</script>

<!-- Javascript untuk popup ModalDelete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#ModalDelete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#pendidikan').DataTable();
  });
</script>
