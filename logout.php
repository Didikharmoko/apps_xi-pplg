<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
//session_destroy();

// mengalihkan halaman ke halaman login
$_SESSION['notif'] = "Berhasil Logout";
header("location:index.php");
die();

?>
