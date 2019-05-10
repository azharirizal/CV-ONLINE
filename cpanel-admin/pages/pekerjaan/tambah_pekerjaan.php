<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-black-tie"></i> TAMBAH PEKERJAAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li><a href="index.php?page=data_pekerjaan"><i class="fa fa-black-tie"></i> DATA PEKERJAAN</a></li>
        <li class="active"><i class="fa fa-black-tie"></i> TAMBAH PEKERJAAN</li>
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
            <form role="form" method="post" action="pages/pekerjaan/tambah_pekerjaan_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Jabatan :</label>
                  <input type="text" name="position" class="form-control" placeholder="Jabatan" required>
                </div>
                <div class="form-group">
                  <label>Perusahaan :</label>
                  <input type="text" name="company" class="form-control" placeholder="Perusahaan" required>
                </div>
                <div class="form-group">
                  <label>Lama Kerja :</label>
                  <input type="text" name="workdate" class="form-control" placeholder="Lama Kerja" required>
                </div>
                <div class="form-group">
                  <label>Aktivitas :</label>
                  <textarea class="form-control" rows="4" name="activity" placeholder="Aktivitas..."></textarea>
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
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->