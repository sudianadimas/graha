<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tutorial_phpoop");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function cari($keyword) {
	$query = "SELECT * FROM tbl_user
				WHERE
			  nama_pengguna LIKE '%$keyword%' OR
			  telepon LIKE '%$keyword%' OR
			  username LIKE '%$keyword%' OR
			  
			  email LIKE '%$keyword%' OR
			  alamat LIKE '%$keyword%'
			";
	return query($query);
}



?>