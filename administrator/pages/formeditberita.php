
<h1>Form Edit Berita</h1>


<form action="aksi_ubah.php?id=<?php echo $data_berita['id_berita']?>" method="POST">
 	<label for="Judul">Judul</label><br>
 	<input type="text" name="judul" value= "<?php echo $data_berita['judul']?>" ><br>
<br>
	
	<label for="isi">Isi</label><br>
	<textarea name="isi" cols="30" rows="10"><?php echo $data_berita['isi']?>
	</textarea>
 <br>
	
	<label for="kategori">Kategori</label><br>
		<select name="kategori">
		<?php foreach ($data_kategori as $kat): ?>
			
		<br>	<option value="<?php echo $kat['id_kategori'] ?>" 
		<?php
		if ($kat['id_kategori']==$data_berita['id_kategori']) {
			echo "selected"; 
			# code...
		}
		?>
		><?php echo $kat['nama_kategori'] ?></option>
		<?php endforeach ?>
		</select><br>
	<br>
	
		<input type="submit" value="Submit">
 </form>