<?php
include "../../conf/conn.php";

$id = $_GET['id'];

$query = mysql_query ("SELECT a.title,a.institute,a.major,a.graduate,a.description,b.fullname FROM education a INNER JOIN biodata b ON a.id_biodata=b.id_biodata WHERE a.id_education ='$id'");
$row = mysql_fetch_array ($query);

?>

  <!-- ModalEdit --> 
  <div class="modal-dialog">
    <div class="example-modal">
      <div class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title" style="text-align:center;">Detail Pendidikan</h3>
            </div>
            <div class="modal-body">
              <table class="table table-hover table-bordered">
                <tr> 
                  <td>Nama</td>
                  <td>: <?php echo $row['fullname']; ?></td>						 
                </tr>
                <tr> 
                  <td>Gelar</td>
                  <td>: <?php echo $row['title']; ?></td>						 
                </tr>
                <tr> 
                  <td>Instansi</td>
                  <td>: <?php echo $row['institute']; ?></td>						 
                </tr>
                <tr> 
                  <td>Jurusan</td>
                  <td>: <?php echo $row['major']; ?></td>						 
                </tr>
                <tr> 
                  <td>Lulusan</td>
                  <td>: <?php echo $row['graduate']; ?></td>						 
                </tr>
                <tr> 
                  <td>Aktivitas</td>
                  <td>: <?php echo $row['description']; ?></td>						 
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
