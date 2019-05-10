<?php
$id = $_SESSION['id_biodata'];
$mysqlquery = mysql_query("SELECT * FROM biodata WHERE id_biodata='".$id."'");
$row = mysql_fetch_array($mysqlquery);
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-primary">
      <i class="fa fa-user"></i> BIODATA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li class="active"><i class="fa fa-user"></i> BIODATA</li>
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
            <form role="form" method="post" action="pages/biodata_proses.php">
            <input type="hidden" name="id_biodata" value="<?php echo $row['id_biodata']; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Lengkap :</label>
                  <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin :</label>
                  <select class="form-control" name="gender">
                    <option value="<?php echo $row['gender']; ?>">-                    
                    <?php 
                    if($row['gender']=="m"){
                      $gender="Laki-laki";
                    }elseif($row['gender']=="f"){
                      $gender="Perempuan";
                    }else{
                      $gender="-";
                    }echo $gender;
                    ?> -                    
                    </option>
                    <option value="m">Laki-laki</option>
                    <option value="f">Perempuan</option>
                  </select>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Tempat :</label>
                      <input type="text" class="form-control" name="birthplace" value="<?php echo $row['birthplace']; ?>" placeholder="Tempat">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Tanggal Lahir :</label>
                      <input type="text" class="form-control" name="birthdate" value="<?php echo $row['birthdate']; ?>" placeholder="Tanggal Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label>Telepon :</label>
                  <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" placeholder="Telepon" required>
                </div>
                <div class="form-group">
                  <label>E-Mail :</label>
                  <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="E-Mail" required>
                </div>
                <div class="form-group">
                  <label>Alamat :</label>
                  <textarea class="form-control" rows="4" name="address" placeholder="Alamat..."><?php echo $row['address']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Jabatan :</label>
                  <input type="text" name="position" value="<?php echo $row['position']; ?>" class="form-control" placeholder="Jabatan" required>
                </div>
                <div class="form-group">
                  <label>Deskripsi Diri :</label>
                  <textarea class="form-control" rows="4" name="aboutme" placeholder="Deskripsi Diri..."><?php echo $row['aboutme']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Quotes :</label>
                  <input type="text" name="quote" value="<?php echo $row['quote']; ?>" class="form-control" placeholder="Quotes" required>
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