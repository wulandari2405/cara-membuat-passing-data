<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
</head>
<body bgcolor="lightblue">
	<table  width="100%">
		<tr>
	<table  width="100%">
		</div
		<body>
		<p align=left><b>
		</b>
		<ul>
			<li>
			
				<h1><center>SELAMAT DATANG DIHALAMAN RUMAH WULAN</h1>
	</center>
			
	</li>
		<ul>
			<td width="30%">
			<b><u>MENU SEBELAH KIRI</u></b><br>
			<ul>
				<li>
					<a href="beranda.html">
						Beranda
					</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
				<li>
					Menu Ke Ketiga
				</li>
			</ul>
			</td>
			<td bgcolor="pink">
			<b><u>LIST PENGGUNA</u></b><br>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM login1');
				?>
				<table border="3">
					
					<tr>

						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
						</b>
						</td>
						<td>
							<b>
							Aksi
							</b>
						</td>
					</tr>

				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['nama'];
					echo"</td><td>";
					echo $row['katasandi'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus.php?apanih=".$row['nama']."		'>hapus</a>
					";

				}
			?>
			</table>
			<br>
			<button><a  href="tambah_pengguna.php">Tambah Pengguna</a></button>
			</td>
		</tr>
	</table>
</body>
</html>