<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Page Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
		<script src="main.js"></script>
	</head>
	
	<body>
		<div id="test">
		<h1>Tabel Biodata Mahasiswa</h1>
			<center><a href="input.php"><font size="15" color=" rgb(68, 57, 57);">Input Data</font></a></center>
			
			<br/>
			<div class="table">
			<table border=1>
				<tr style= "background-color:  rgb(220, 57, 57);">
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Fakultas</th>
					<th>Jurusan</th>
					<th>IPK</th>
					<th>Pilihan</th>
				</tr>
			</div>
				<?php
				$query = "SELECT*FROM mahasiswa ORDER BY nim ASC";
				$result = mysqli_query($link,$query);
				if(!$result){
					die ("Query Error: ".mysqli_errno($link).
					" - ".mysqli_error($link));
				}
				
				$no = 1;
				
				while($data = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td >$no</td>";
					echo "<td>$data[nim]</td>";
					echo "<td>$data[nama]</td>";
					echo "<td>$data[fakultas]</td>";
					echo "<td>$data[jurusan]</td>";
					echo "<td>$data[ipk]</td>";
					echo '<td>
						<a href="edit.php?
						id='.$data['id'].'">Edit</a> /
							<a href="hapus.php?
						id='.$data['id'].'"
											onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
						</td>';
						echo "</tr>";
						$no++;
				}
				?>
			</table>
		</body>
</html>