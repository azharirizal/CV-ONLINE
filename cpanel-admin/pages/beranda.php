<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
        <i class="fa fa-dashboard"></i> Beranda
        <small>Halaman Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> BERANDA</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <h4> Silahkan Pilih Menu Disamping Untuk Mengolah Data.</h4><br>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-aqua">
                    Cara Membuat CV Online
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-check-square-o"></i> Step 1</span>

                <h3 class="timeline-header no-border"><a href="index.php?page=biodata"><u>Mengisi Biodata</u></a></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-cogs bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-check-square-o"></i> Step 2</span>

                <h3 class="timeline-header no-border"><a href="index.php?page=pengaturan"><u>Melakukan Pengaturan</u></a></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-black-tie bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-check-square-o"></i> Step 3</span>

                <h3 class="timeline-header no-border"><a href="index.php?page=data_pekerjaan"><u>Mengisi Riwayat Pekerjaan</u></a></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-graduation-cap bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-check-square-o"></i> Step 4</span>

                <h3 class="timeline-header no-border"><a href="index.php?page=data_pendidikan"><u>Mengisi Riwayat Pendidikan</u></a></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-image bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-check-square-o"></i> Step 5</span>

                <h3 class="timeline-header no-border"><a href="index.php?page=data_galeri"><u>Mengupload Foto</u></a></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-eye bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-check-square-o"></i> Step 6</span>

                <h3 class="timeline-header no-border"><a href="../cv.php?id=<?php echo $_SESSION['id_biodata']; ?>" target="_blank"><u>Lihat CV Online !</u></a></h3>
              </div>
            </li>
            <!-- END timeline item -->
          </ul>
        </div>
    </div>
    </section>
    <!-- /.Main content -->
  </div>
<!-- /.content-wrapper -->
