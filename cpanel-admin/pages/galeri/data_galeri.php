<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-image"></i> DATA GALERI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li class="active"><i class="fa fa-image"></i> DATA GALERI</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_galeri" class="btn btn-primary" role="button" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="galeri" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NAMA</th>
                  <th>GAMBAR</th>
                  <th>TANGGAL</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $no=0;
                $id=$_SESSION['id_biodata'];
                $query=mysql_query("SELECT * FROM gallery WHERE id_biodata='".$id."' ORDER BY id_gallery DESC");
                while ($row=mysql_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['description'];?></td>
                  <td><img src="../images/gallery/<?php echo $row['image']; ?>" class="img-rounded img-responsive" width="100"></td>
                  <td><?php echo $row['date'];?></td>
                  <td>
                    <a href="#" id="<?php echo $row['id_gallery']; ?>" class="btn btn-info open_modal" role="button" title="Detail Data"><i class="fa fa-search"></i></a>
                    <a href="#" onclick="confirm_modal('pages/galeri/hapus_galeri.php?id=<?=$row['id_gallery'];?>&image=<?=$row['image'];?>')" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
                   url: "pages/galeri/detail_galeri.php",
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
    $('#galeri').DataTable();
  });
</script>
