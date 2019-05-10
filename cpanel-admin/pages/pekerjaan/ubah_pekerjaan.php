<?php
$id = $_GET['id'];
$mysqlquery = mysql_query("SELECT * FROM job WHERE id_job='".$id."'");
$row = mysql_fetch_array($mysqlquery);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-black-tie"></i> UBAH PEKERJAAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li><a href="index.php?page=data_pekerjaan"><i class="fa fa-black-tie"></i> DATA PEKERJAAN</a></li>
        <li class="active"><i class="fa fa-black-tie"></i> UBAH PEKERJAAN</li>
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
            <form role="form" method="post" action="pages/pekerjaan/ubah_pekerjaan_proses.php">
            <input type="hidden" name="id_job" value="<?php echo $row['id_job']; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Jabatan :</label>
                  <input type="text" name="position" value="<?php echo $row['position']; ?>" class="form-control" placeholder="Jabatan" required>
                </div>
                <div class="form-group">
                  <label>Perusahaan :</label>
                  <input type="text" name="company" value="<?php echo $row['company']; ?>" class="form-control" placeholder="Perusahaan" required>
                </div>
                <div class="form-group">
                  <label>Lama Kerja :</label>
                  <input type="text" name="workdate" value="<?php echo $row['workdate']; ?>" class="form-control" placeholder="Lama Kerja" required>
                </div>
                <div class="form-group">
                  <label>Aktivitas :</label>
                  <textarea class="form-control" rows="4" name="activity" placeholder="Aktivitas..."><?php echo $row['activity']; ?></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="update" value="update" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->