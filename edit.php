<?php 
include 'database.php';
$db = new database(); 
?>

<center><h3>DATA USER</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ 
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Film Favorite</td>
		<td><input type="text" name="film_favorite" value="<?php echo $d['film_favorite'] ?>"></td>
	</tr>
	<tr>
		<td>Tempat Wisata Traveling</td>
		<td><input type="text" name="travel" value="<?php echo $d['travel'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</center>
<?php } ?>
</form>
