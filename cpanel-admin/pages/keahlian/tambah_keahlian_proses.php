<?php
session_start();
include "../../conf/conn.php";

if($_POST['save'])
{

$skill      = $_POST['skill'];
$percent    = $_POST['percent'];
$id         = $_SESSION['id_biodata'];

$query = ("INSERT INTO skill(skill,percent,id_biodata) VALUES ('".$skill."','".$percent."','".$id."')");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Ditambahkan !!!");
                window.location.href="../../index.php?page=tambah_keahlian"</script>';	
	}
}
?>
