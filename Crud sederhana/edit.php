<?php
	include 'koneksi.php';
	
	if (isset($_GET['id'])) {
		$id = ($_GET["id"]);
		
		$query = "SELECT*FROM mahasiswa WHERE id='$id'";
		$result = mysqli_query($link,$query);
		if(!$result){
			die ("Query Error : ".mysqli_errno($link). " - ".mysqli_error($link));
		}
		$data = mysqli_fetch_assoc($result);
		$nim = $data["nim"];
		$nama = $data["nama"];
		$fakultas = $data["fakultas"];
		$jurusan = $data["jurusan"];
		$ipk = $data["ipk"];
		
	} else {
		header("location:index.php");
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
	</head>
	<body>
		<div id="test">
		<h1>Edit Data</h1>
		<div class="container">
		<form id="form_mahasiswa" action="edit_proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<fieldset>
		<legend>Edit Data Mahasiswa</legend>
			<p>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" value="<?php echo $nim ?>">
			</p>
			<p>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
			</p>
			<p>
				<label for="fakultas">Fakultas : </label>
				<select name="fakultas" id="fakultas">
				<option value=" " <?php if($data['fakultas'] == ' '){ echo 'selected'; } ?>>  </option>
				<option value="Ilkom" <?php if($data['fakultas'] == 'Ilkom'){ echo 'selected'; } ?>> Ilkom</option>
				<option value="Ilmubudaya" <?php if($data['fakultas'] == 'Ilmubudaya'){ echo 'selected'; } ?>> Ilmubudaya</option>
				<option value="Ekonomi" <?php if($data['fakultas'] == 'Ekonomi'){ echo 'selected'; } ?>> ekonomi </option>
				<option value="Teknik" <?php if($data['fakultas'] == 'Teknik'){ echo 'selected'; } ?>> Teknik </option>
				<option value="Kesmas" <?php if($data['fakultas'] == 'Kesmas'){ echo 'selected'; } ?>> Kesmas</option>
				<option value="Perhotelan" <?php if($data['fakultas'] == 'Perhotelan'){ echo 'selected'; } ?>> perhotelan </option>
				</select>
			</p>
			<p>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" value="<?php echo $jurusan ?>">
			</p>
			<p>
				<label for="ipk">IPK : </label>
				<input type="text" name="ipk" id="ipk" value="<?php echo $ipk ?>">
			</p>
		</fieldset>
		<p>
			<input type="submit" name="edit" value="Update Data">
		</p>
	</form>
	</div>
	</body>
</html>