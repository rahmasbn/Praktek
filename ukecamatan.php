<?php
include "koneksi.php";
$kode_prov=$_POST["kode_provinsi"];
$kode_kab=$_POST["kode_kabupaten"];
$kode_kec=$_POST["kode_kecamatan"];
$nama_kec=$_POST["nama_kecamatan"];

$sql="UPDATE kecamatan set nama_kecamatan='$nama_kec' where kode_kecamatan='$kode_kec'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}

$sql="UPDATE kecamatan set kode_kecamatan='$kode_kec' where nama_kecamatan='$nama_kec'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>