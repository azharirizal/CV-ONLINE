<?php
include "../../conf/conn.php";

$id = $_GET['id'];

$query = ("DELETE FROM job WHERE id_job ='$id'");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Dihapus !!!");
				window.location.href="../../index.php?page=data_pekerjaan"</script>';	
    }
?>