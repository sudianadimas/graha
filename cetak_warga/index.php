<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM tbl_user  order by telepon ASC");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
body {background-color: powderblue;}
h1   {color: #0b486b;}
p    {color: red;}
</style>
</head>


<h1 style="color:#0b486b;">PER KELUAGA</h1>

<form action="" method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	
</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr bgcolor="#388686">
		<th>NO.</th>
		<th>NOMER RUMAH</th>
		<th>NAMA</th>
		<th>KETERANGAN</th>
		<th>STATUS</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["telepon"]; ?></td>
		<td><?= $row["nama_pengguna"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
		<td><?= $row["email"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

<div style="text-align:center;padding:20px;">
<input class="noPrint" type="button" value="Cetak Halaman" onclick="window.print()">
</div>
</body>
</html>