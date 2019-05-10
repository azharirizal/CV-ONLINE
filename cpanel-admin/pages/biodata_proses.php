<?php
include "../conf/conn.php";

if($_POST['update'])
{

$id_biodata     = $_POST['id_biodata'];
$fullname       = $_POST['fullname'];
$gender         = $_POST['gender'];
$birthplace     = $_POST['birthplace'];
$birthdate      = $_POST['birthdate'];
$phone          = $_POST['phone'];
$email          = $_POST['email'];
$address        = $_POST['address'];
$position       = $_POST['position'];
$aboutme        = $_POST['aboutme'];
$quote          = $_POST['quote'];

$query = ("UPDATE biodata SET fullname='$fullname',gender='$gender',birthplace='$birthplace',birthdate='$birthdate',phone='$phone',email='$email',address='$address',position='$position',aboutme='$aboutme',quote='$quote' WHERE id_biodata ='$id_biodata'");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Diubah !!!");
				window.location.href="../index.php"</script>';	
	}
}
?>