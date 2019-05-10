<?php
include "../../conf/conn.php";

$id = $_GET['id'];
$image = $_GET['image'];

unlink("../../../images/gallery/".$image);

$query = ("DELETE FROM gallery WHERE id_gallery ='$id'");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Dihapus !!!");
				window.location.href="../../index.php?page=data_galeri"</script>';	
    }
?>