<?php
include 'database1.php';
$db = new database1();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nama'],$_POST['email'],$_POST['jurusan']);
	header ("location:tampil1.php");
}else if($aksi == "hapus"){
	$db->hapus($_GET['id']);
	header ("location:tampil1.php");
}else if ($aksi == "update"){
	$db->update($_POST['id'],$_POST['nama'],$_POST['email'],$_POST['jurusan']);
	header("location:tampil1.php");
}
?>