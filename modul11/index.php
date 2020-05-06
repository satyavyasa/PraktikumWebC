<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
	<h1>CRUD PHP and Pagination</h1>
	<label>Satya</label><br>
	<label>1708561058</label><br><br>
<table>
<tr>
	<td>
		<form class="input" action="crud.php" method="post">
			<h4>Input data</h4>
			<input type="text" name="add" hidden>
			<input type="text" name="nama" placeholder="nama" required><br>
			<input type="text" name="alamat" placeholder="alamat"><br>
			<input type="radio" name="gender" value='l'>laki
			<input type="radio" name="gender" value='p'>perempuan<br>
			<input type="text" name="tempat_lahir" placeholder="tempat lahir"><br>
			tanggal lahir<input type="date" name="tanggal_lahir"><br>
			<button type="submit">tambahkan</button>
		</form>
	</td>
	<td>
		<table id="result">
			<tr>
				<th><label>id.</label></th>
				<th><label>Nama</label></th>
				<th><label>Alamat</label></th>
				<th><label>Gender</label></th>
				<th><label>Tempat Lahir</label></th>
				<th><label>Tanggal Lahir</label></th>
				<th><label>Tindakan</label></th>
			</tr>
			<?php

			$conn = mysqli_connect('localhost','root','','praktikum');

			//pagination part starts here
			$result = $conn->query('select * from bio;');
			
			$jcon=5;//jumlah data per halaman
			$jpage=ceil(mysqli_num_rows($result)/$jcon);//jumlah halaman=jumlah data/jumlah data per halaman (bulatkan ke atas)
			if(!isset($_GET['page'])){
				$page=1;//halaman saat ini
			}
			else{
				$page=$_GET['page'];
			}
			$lim=($page-1)*$jcon;//batasan sql tiap halaman=(halaman saat ini-1)*jumlah data per halaman
			$result = $conn->query('select * from bio limit '.$lim.','.$jcon.';');
			
			//pagination part ends here

			if ($result-> num_rows>0) {
				while ($row=$result-> fetch_assoc()) {
					echo '<tr>';
						echo '<td><label>'.$row['id'].'</label></td>';
						echo '<td><label>'.$row['nama'].'</label></td>';
						echo '<td><label>'.$row['alamat'].'</label></td>';
						if ($row['gender']=='L') {
							echo '<td><label>Laki</label></td>';
						}
						else{
							echo '<td><label>Perempuan</label></td>';
						}
						echo '<td><label>'.$row['tempat_lahir'].'</label></td>';
						echo '<td><label>'.$row['tanggal_lahir'].'</label></td>';
						echo '<td>';
						echo '<form action="crud.php" method="post">';
							echo "<input name='delete' type='text' hidden value='".$row['id']."'>";
							echo '<button type="submit">hapus</button>';
						echo '</form>';
						echo '</td>';
					echo '</tr>';
				}
			}
			?>
		</table>
	</td>
	<td>
		<form class="input" action="crud.php" method="post">
			<h4>Edit data</h4>
			<input type="text" name="edit" hidden>
			<input type="number" name="id" placeholder="id" required><br>
			<input type="text" name="nama" placeholder="nama"><br>
			<input type="text" name="alamat" placeholder="alamat"><br>
			<input type="radio" name="gender" value='l'>laki
			<input type="radio" name="gender" value='p'>perempuan<br>
			<input type="text" name="tempat_lahir" placeholder="tempat lahir"><br>
			tanggal lahir<input type="date" name="tanggal_lahir"><br>
			<button type="submit">ubah</button>
			kosongkan yang tidak dirubah
		</form>
	</td>
</tr>
<tr>
	<td colspan="3" align="center">
		<h4>Pagination</h4>
		<?php
		for ($page=1; $page <= $jpage; $page++) { 
			echo '<a href="index.php?page='.$page.'">'.$page.'</a> ';
		}
		?>
	</td>
</tr>
</table>
</center>
</body>
</html>