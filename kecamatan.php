<!doctype html>
<html lang="en">
<h1>Input Kecamatan</h1>
 <head>
  <title>Data Kecamatan</title>
  <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   	alert('Anda harus mengisi dengan angka! ! !!');
		   	return false;
		   } else {
		   	return true;
		   }
		  	
		}
	</script>
 </head>
 <body>
  <form method="post" action="skecamatan.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><select name="kode_provinsi">
			<?php
			include "koneksi.php";
			$sql="select * from provinsi";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[0]'>$data[1]</option>";
			}
			?>
		</select></td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><select name="kode_kabupaten">
			<?php
			include "koneksi.php";
			$sql="select * from kabupaten";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[1]'>$data[2]</option>";
			}
			?>
		</select></td>
	</tr>
	<tr>
		<td>Kode Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kode_kecamatan" onkeypress="return hanyaAngka(event)"></td>
	</tr>
	<tr>
		<td>Nama Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="nama_kecamatan"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data Kecamatan</strong>
  <table border="1">
  <tr>
	<td>Kode Provinsi</td>
	<td>Kode Kabupaten</td>
	<td>Kode Kecamatan</td>
	<td>Nama Kecamatan</td>
	<td>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from Kecamatan";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td>$data[2]</td>";
	echo"<td>$data[3]</td>";
	echo"<td><a href=./ekecamatan.php?id=$data[2]>Edit</a>|<a href=./dkecamatan.php?id=$data[2]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
