<?php
include "../conf/conn.php";

if($_POST['update'])
{

$id_job     = $_POST['id_job'];
$position   = $_POST['position'];
$company    = $_POST['company'];
$workdate   = $_POST['workdate'];
$activity   = $_POST['activity'];

$query = ("UPDATE job SET position='$position',company='$company',workdate='$workdate',activity='$activity' WHERE id_job ='$id_job'");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Diubah !!!");
				window.location.href="../../index.php?page=data_pekerjaan"</script>';	
	}
}
?>