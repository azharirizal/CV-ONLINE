<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-user-plus"></i> TAMBAH KEAHLIAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li><a href="index.php?page=data_pekerjaan"><i class="fa fa-black-tie"></i> DATA PEKERJAAN</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> TAMBAH KEAHLIAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/keahlian/tambah_keahlian_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Keahlian</label>
                  <input type="text" name="skill" class="form-control" placeholder="Nama Keahlian" required>
                </div>
                <div class="form-group">
                  <label>Presentase Keahlian</label>
                  <input type="text" name="percent" class="form-control" placeholder="Presentase Keahlian" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="save" value="save" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-body table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>KEAHLIAN</th>
                  <th>PRESENTASE</th>
                  <th>HAPUS</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $no=0;
                $id=$_SESSION['id_biodata'];
                $query=mysql_query("SELECT * FROM skill WHERE id_biodata='".$id."' ORDER BY id_skill ASC");
                while ($row=mysql_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['skill'];?></td>
                  <td><?php echo $row['percent']; ?></td>
                  <td><a href="pages/keahlian/hapus_keahlian.php?id=<?=$row['id_skill'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a></td>
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