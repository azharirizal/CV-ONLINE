<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-graduation-cap"></i> TAMBAH PENDIDIKAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li><a href="index.php?page=data_pendidikan"><i class="fa fa-graduation-cap"></i> DATA PENDIDIKAN</a></li>
        <li class="active"><i class="fa fa-graduation-cap"></i> TAMBAH PENDIDIKAN</li>
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
            <form role="form" method="post" action="pages/pendidikan/tambah_pendidikan_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Gelar :</label>
                  <input type="text" name="title" class="form-control" placeholder="Gelar" required>
                </div>
                <div class="form-group">
                  <label>Sekolah/Universitas :</label>
                  <input type="text" name="institute" class="form-control" placeholder="Sekolah/Universitas" required>
                </div>
                <div class="form-group">
                  <label>Jurusan :</label>
                  <input type="text" name="major" class="form-control" placeholder="Jurusan" required>
                </div>
                <div class="form-group">
                  <label>Tahun Lulus :</label>
                  <input type="text" name="graduate" class="form-control" placeholder="Tahun Lulus" required>
                </div>
                <div class="form-group">
                  <label>Aktivitas :</label>
                  <textarea class="form-control" rows="4" name="description" placeholder="Aktivitas..."></textarea>
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