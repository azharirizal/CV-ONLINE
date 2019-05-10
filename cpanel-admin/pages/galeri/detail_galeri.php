<?php
include "../../conf/conn.php";

$id = $_GET['id'];

$query = mysql_query ("SELECT * FROM gallery WHERE id_gallery ='$id'");
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
              <h3 class="modal-title" style="text-align:center;">Detail Gambar</h3>
            </div>
            <div class="modal-body">
                <img src="/cv/images/gallery/<?php echo $row['image']; ?>" class="img-responsive">
                <br>
                <p class="text-center"><?php echo $row['description']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
