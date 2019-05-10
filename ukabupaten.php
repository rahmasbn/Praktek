<?php
include "koneksi.php";
$kode_prov=$_POST["kode_provinsi"];
$kode_kab=$_POST["kode_kabupaten"];
$nama_kab=$_POST["nama_kabupaten"];

$sql="UPDATE kabupaten set nama_kabupaten='$nama_kab' where kode_kabupaten='$kode_kab'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kabupaten.php');
}

$sql="UPDATE kabupaten set kode_kabupaten='$kode_kab' where nama_kabupaten='$nama_kab'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kabupaten.php');
}
?>