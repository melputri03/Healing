<?php

require "koneksi.php";

session_start();

if ($_POST["id"] == $_SESSION["id"]) {
	echo "Tidak bisa hapus user yang sedang aktif";
	exit
}


$id = $_POST["id"]

$sql = "DLETE FROM user WHERE id = '$id'";
mysql_query($koneksi, $sql);

if (mysql_error($koneksi)); {
    echo mysql_error($koneksi);
} else {
	header("location: user.php");
}



