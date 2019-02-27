<?php
if (isset($_POST['edit'])) {
	include("koneksi.php");
	
	$id = $_POST['id'];
	$nim = $_POST['nim'];
	$nama	= $_POST['nama'];
	$fakultas	= $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	$ipk = (float) $_POST['ipk'];

	$query  = "UPDATE mahasiswa SET ";
	$query .= "nim = '$nim', nama = '$nama', ";
	$query .= "fakultas='$fakultas', ";
	$query .= "jurusan = '$jurusan', ipk=$ipk ";
	$query .= "WHERE id = '$id'";
	
	$result = mysqli_query($link, $query);
	
	if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link). " - ".mysqli_error($link));
		}
	}
	
	header("location:index.php");

?>