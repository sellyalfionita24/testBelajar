<?php
include 'koneksi.php';
$sql="SELECT *from tb_kelas";
$data=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>tampil data</title>
</head>
<body>
<table border="1">
	<tr>
		<th>no</th>
		<th>nama kelas</th>
		<th>jumlah siswa</th>

	</tr>

	<?php 
	$no=1;

	while($hasil=mysqli_fetch_assoc($data)):
	 ?>

	<tr>
		<td><?php echo $no ?>
		<td><?php echo $hasil['nama_kelas'] ?></td>
		<td><?php echo $hasil['jumlah_siswa'] ?></td>

	</tr>
<?php 
	$no++;
	endwhile; 
?>
</table>
</body>
</html>