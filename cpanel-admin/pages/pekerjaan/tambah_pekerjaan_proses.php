<?php
session_start();
include "../../conf/conn.php";

if($_POST['save'])
{

$position   = $_POST['position'];
$company    = $_POST['company'];
$workdate   = $_POST['workdate'];
$activity   = $_POST['activity'];
$id         = $_SESSION['id_biodata'];

$query = ("INSERT INTO job(position,company,workdate,activity,id_biodata) VALUES ('".$position."','".$company."','".$workdate."','".$activity."','".$id."')");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Ditambahkan !!!");
				window.location.href="../../index.php?page=data_pekerjaan"</script>';	
	}
}
?>
