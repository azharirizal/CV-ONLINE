<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-image"></i> TAMBAH GALERI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li><a href="index.php?page=data_galeri"><i class="fa fa-image"></i> DATA GALERI</a></li>
        <li class="active"><i class="fa fa-image"></i> TAMBAH GALERI</li>
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
            <form role="form" method="post" action="pages/galeri/tambah_galeri_proses.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Gambar</label>
                  <input type="text" name="description" class="form-control" placeholder="Nama Gambar" required>
                </div>
                <div class="form-group">
                  <label>Upload Gambar</label>
                  <input type="file" name="image" required>
                  <p class="help-block">Contoh : nama-gambar.jpg | 16:9 Aspect Ratio</p>
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