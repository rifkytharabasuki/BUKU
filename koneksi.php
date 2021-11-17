<?php 
$koneksi = mysqli_connect('localhost','root','','lat_login');
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function hapus($id){
	global $koneksi;
	mysqli_query($koneksi,"DELETE FROM user WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}
function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}
 
?>