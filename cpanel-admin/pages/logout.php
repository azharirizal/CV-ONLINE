<?php
session_start();
include '../conf/conn.php';

unset($_SESSION['id_admin']);
unset($_SESSION['fullname']);
unset($_SESSION['gender']);
unset($_SESSION['username']);
session_destroy();

		echo '<script>alert("Anda Telah Logout !!!");
				window.location.href="login.php"</script>';
?>
