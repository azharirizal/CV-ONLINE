<?php
include "../conf/conn.php";

if($_POST['update'])
{

$id_biodata     = $_POST['id_biodata'];
$fb             = $_POST['fb'];
$twitter        = $_POST['twitter'];
$ig             = $_POST['ig'];
$linkedin       = $_POST['linkedin'];
$file1          = $_POST['file1'];
$file2          = $_POST['file2'];
$file3          = $_POST['file3'];
$profile        = $_FILES['profile']['name'];
$resume         = $_FILES['resume']['name'];
$banner         = $_FILES['banner']['name'];

if(empty($profile)){ 
} else {
$sql = mysql_query ("UPDATE biodata SET profile='$profile' WHERE id_biodata ='$id_biodata'"); 
copy($_FILES['profile']['tmp_name'],"../img/profile/".$profile);
}

if(empty($resume)){ 
} else {
$sql = mysql_query ("UPDATE biodata SET resume='$resume' WHERE id_biodata ='$id_biodata'"); 
copy($_FILES['resume']['tmp_name'],"../../file/".$resume);
}

if(empty($banner)){ 
} else {
$sql = mysql_query ("UPDATE biodata SET banner='$banner' WHERE id_biodata ='$id_biodata'"); 
copy($_FILES['banner']['tmp_name'],"../../images/banner/".$banner);
}

$query = ("UPDATE biodata SET fb='$fb',twitter='$twitter',ig='$ig',linkedin='$linkedin' WHERE id_biodata ='$id_biodata'");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Diubah !!!");
				window.location.href="../index.php?page=pengaturan"</script>';	
	}
}
?>