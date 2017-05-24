<?php 
$host = "localhost";
$dbname = "dhiga_sisfonews";
$username = "root";
$password = " ";
$db = "";

try {
      $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
      die("Connection error: ".$exception->getMessage());
}


$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll(); ?>

<table border="1">
	<tr>
		<th>Id</th>
		<th>Tanggal</th>
		<th>Judul</th>
		<th>Isi</th>

	</tr>
	<?php foreach ($data as $ib) { ?>
	<tr>
		<td><?php echo $ib ['kategori_id']?></th>
		<td><?php echo $ib ['tanggal']?></td>
		<td><?php echo $ib ['judul']?></td>
		<td><?php echo $ib ['isi']?></td>
	</tr>





<?php } ?>
</table>
 

