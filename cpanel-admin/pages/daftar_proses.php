<?php
include "../conf/conn.php";

if($_POST['save'])
{

$username   = $_POST['username'];
$password   = $_POST['password'];
$fullname   = $_POST['fullname'];
$email      = $_POST['email'];
$date       = date('Y-m-d-H-i-s');

$query = ("INSERT INTO biodata(id_biodata,fullname,email,username,password,date) VALUES (UUID(),'".$fullname."','".$email."','".$username."','".md5($password)."','".$date."')");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Akun Telah Didaftarkan !!!");
				window.location.href="login.php"</script>';	
	}
}
?>
