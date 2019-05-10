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
      <i class="fa fa-cogs"></i> PENGATURAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> BERANDA</a></li>
        <li class="active"><i class="fa fa-cogs"></i> PENGATURAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" style="border:3px solid #3c8dbc;"

              <?php
              if($_SESSION['profile']!=NULL){
              echo "<img src='img/profile/".$_SESSION['profile']."' class='img-circle' alt='User Image'>";
              }else{
                if($row['gender']=="m"){ 
                echo "<img src='img/profile-male.png' class='img-circle' alt='User Image'>";
                }elseif($row['gender']=="f"){
                echo "<img src='img/profile-female.png' class='img-circle' alt='User Image'>";
                }else{
                echo "<img src='img/profile.png' class='img-circle' alt='User Image'>";
                }
              }
						  ?>

              <h3 class="profile-username text-center"><?php echo $_SESSION['fullname']; ?></h3>

              <p class="text-muted text-center"><?php echo $_SESSION['position']; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><?php echo $row['username']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right"><?php if($row['gender']=="m"){echo "Laki-laki";}else{echo "Perempuan";} ?></a>
                </li>
                <li class="list-group-item">
                  <b>Date of Birth</b> <a class="pull-right"><?php echo $row['birthplace']; ?>, <?php echo $row['birthdate']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"><?php echo $row['phone']; ?></a>
                </li>
              </ul>

              <a href="../cv.php?id=<?php echo $_SESSION['id_biodata']; ?>" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-eye"></i> <b>Lihat CV</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="pages/pengaturan_proses.php" enctype="multipart/form-data">
            <input type="hidden" name="id_biodata" value="<?php echo $row['id_biodata']; ?>">
              <div class="box-body">
                <div class="row">
                  <div class="form-group col-md-3">
                    <label style="color:#3C5A99;"><i class="fa fa-facebook-square"></i> Facebook :</label>
                      <input type="text" class="form-control" name="fb" value="<?php echo $row['fb']; ?>" placeholder="Link Facebook">
                  </div>
                  <div class="form-group col-md-3">
                    <label style="color:#38A1F3;"><i class="fa fa-twitter-square"></i> Twitter :</label>
                      <input type="text" class="form-control" name="twitter" value="<?php echo $row['twitter']; ?>" placeholder="Link Twitter">
                  </div>
                  <div class="form-group col-md-3">
                    <label style="color:#d10869;"><i class="fa fa-instagram"></i> Instagram :</label>
                      <input type="text" class="form-control" name="ig" value="<?php echo $row['ig']; ?>" placeholder="Link Instagram">
                  </div>
                  <div class="form-group col-md-3">
                    <label style="color:#0077B5;"><i class="fa fa-linkedin-square"></i> LinkedIn :</label>
                      <input type="text" class="form-control" name="linkedin" value="<?php echo $row['linkedin']; ?>" placeholder="Link LinkedIn">
                  </div>
                </div>
                <div class="form-group">
                  <label>Upload Foto Profil</label>
                  <input type="file" name="profile">
                  <input type="hidden" name="file1" value="<?php echo $row['profile']; ?>">
                  <p class="help-block">Format : .jpg .png | File Sebelumnya : - <a href="../images/profile/<?php echo $row['profile']; ?>" target="_blank"><?php echo $row['profile']; ?></a></p>
                </div>
                <div class="form-group">
                  <label>Upload Resume</label>
                  <input type="file" name="resume">
                  <input type="hidden" name="file2" value="<?php echo $row['resume']; ?>">
                  <p class="help-block">Format : .doc .docx .pdf | File Sebelumnya : - <a href="../file/<?php echo $row['resume']; ?>" target="_blank"><?php echo $row['resume']; ?></a></p>
                </div>
                <div class="form-group">
                  <label>Upload Gambar Banner</label>
                  <input type="file" name="banner">
                  <input type="hidden" name="file3" value="<?php echo $row['banner']; ?>">
                  <p class="help-block">Format : .jpg .png | File Sebelumnya : - <a href="../images/banner/<?php echo $row['banner']; ?>" target="_blank"><?php echo $row['banner']; ?></a></p>
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