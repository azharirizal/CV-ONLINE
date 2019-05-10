<?php
include "../conf/conn.php";

if($_POST['update'])
{

$id_education = $_POST['id_education'];
$title        = $_POST['title'];
$institute    = $_POST['institute'];
$major        = $_POST['major'];
$graduate     = $_POST['graduate'];
$description  = $_POST['description'];

$query = ("UPDATE education SET title='$title',institute='$institute',major='$major',graduate='$graduate',description='$description' WHERE id_education ='$id_education'");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Diubah !!!");
				window.location.href="../../index.php?page=data_pendidikan"</script>';	
	}
}
?>