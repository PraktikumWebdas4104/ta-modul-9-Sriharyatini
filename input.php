<center><h3>DATA USER</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
		<tr>
			<td>Genre Film Favorite</td>
			<td>
			<input type="checkbox" name="film_favorite[]" value="Horror">Horror<br/>
			<input type="checkbox" name="film_favorite[]" value="Action">Action<br/>
			<input type="checkbox" name="film_favorite[]" value="Anime">Anime<br/>
			<input type="checkbox" name="film_favorite[]" value="Thriler">Thriler<br/>
			<input type="checkbox" name="film_favorite[]" value="Animasi">Animasi<br/>
		</td>
	</tr>
	<tr>
		<td>Tempat Wisata Traveling</td>
		<td>
			<input type="checkbox" name="travel[]" value="Bali">Bali<br/>
			<input type="checkbox" name="travel[]" value="Raja Ampat">Raja Ampat<br/>
			<input type="checkbox" name="travel[]" value="Pulau Derawan">Pulau Derawan<br/>
			<input type="checkbox" name="travel[]" value="Bangka Belitung">Bangka Belitung<br/>
			<input type="checkbox" name="travel[]" value="Labuan Bajo">Labuan Bajo<br/>
	</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>

</table>
</form>
</center>