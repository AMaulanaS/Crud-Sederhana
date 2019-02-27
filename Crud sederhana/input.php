<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Page Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
	</head>
	<body>
		<div id="test">
		<h1>Input Data</h1>
		<div class="container">
			<form id="form_mahasiswa" action="input_proses.php" method="post">
			<fieldset>
			<legend>Input Data Mahasiswa</legend>
			<p>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" placeholder="Contoh: 12345678">
			</p>
			<p>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama">
			</p>
			<p>
				<label for="fakultas">Fakultas : </label>
					<select name="fakultas" id="fakultas">
					<option value="udinus"> </option>
					<option value="Ilkom">Ilkom </option>
					<option value="Ilmubudaya">Ilmubudaya </option>
					<option value="Kesmas">kesmas </option>
					<option value="Teknik">teknik </option>
					<option value="ekonomi">ekonomi </option>
					<option value="perhotelan">perhotelan </option>
					</select>
				</p>
				<p>
					<label for="jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="jurusan">
				</p>
				<p>
					<label for="ipk">IPK : </label>
					<input type="text" name="ipk" id="ipk" placeholder="Contoh: 2.75">
				</p>
			
			</fieldset>
				<p>
				<input type="submit" name="input" value="Tambah Data">
				</p>
			</form>
		</div>
	</body>
</html>