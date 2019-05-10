<?php
include "../../conf/conn.php";

$id = $_GET['id'];

$query = mysql_query ("SELECT a.position,a.company,a.workdate,a.activity,b.fullname FROM job a INNER JOIN biodata b ON a.id_biodata=b.id_biodata WHERE a.id_job ='$id'");
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
              <h3 class="modal-title" style="text-align:center;">Detail Pekerjaan</h3>
            </div>
            <div class="modal-body">
              <table class="table table-hover table-bordered">
                <tr> 
                  <td>Nama</td>
                  <td>: <?php echo $row['fullname']; ?></td>						 
                </tr>
                <tr> 
                  <td>Jabatan</td>
                  <td>: <?php echo $row['position']; ?></td>						 
                </tr>
                <tr> 
                  <td>Perusahaan</td>
                  <td>: <?php echo $row['company']; ?></td>						 
                </tr>
                <tr> 
                  <td>Lama Kerja</td>
                  <td>: <?php echo $row['workdate']; ?></td>						 
                </tr>
                <tr> 
                  <td>Aktivitas</td>
                  <td>: <?php echo $row['activity']; ?></td>						 
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
