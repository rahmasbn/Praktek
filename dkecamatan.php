<?php
include "koneksi.php";
$id=$_GET["id"];

$sql="DELETE from kecamatan where kode_kecamatan='$id'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>