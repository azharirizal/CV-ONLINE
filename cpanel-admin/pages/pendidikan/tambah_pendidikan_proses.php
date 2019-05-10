<?php
session_start();
include "../../conf/conn.php";

if($_POST['save'])
{

$title        = $_POST['title'];
$institute    = $_POST['institute'];
$major        = $_POST['major'];
$graduate     = $_POST['graduate'];
$description  = $_POST['description'];
$id           = $_SESSION['id_biodata'];

$query = ("INSERT INTO education(title,institute,major,graduate,description,id_biodata) VALUES ('".$title."','".$institute."','".$major."','".$graduate."','".$description."','".$id."')");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Ditambahkan !!!");
				window.location.href="../../index.php?page=data_pendidikan"</script>';	
	}
}
?>
