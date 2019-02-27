<?php
	include("koneksi.php");
	
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
	
	$query = "DELETE FROM mahasiswa WHERE id='$id' ";
    $hasil_query = mysqli_query($link, $query);
	
	if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($link). " - ".mysqli_error($link));
    }
  }
  
  header("location:index.php");
 ?>