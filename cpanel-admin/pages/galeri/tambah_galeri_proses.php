<?php
session_start();
include "../../conf/conn.php";

if($_POST['save'])
{

$description = $_POST['description'];
$image = $_FILES['image']['name'];
$date = date('Y-m-d-H-i-s');
$id = $_SESSION['id_biodata'];

copy($_FILES['image']['tmp_name'],"../../../images/gallery/".$image);

$query = ("INSERT INTO gallery(description,image,date,id_biodata) VALUES ('".$description."','".$image."','".$date."','".$id."')");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Ditambahkan !!!");
				window.location.href="../../index.php?page=data_galeri"</script>';	
	}
}
?>
