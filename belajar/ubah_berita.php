<?php 
	
$id = $_GET['id'];
echo $id;

$host = "localhost";
$dbname = "dhiga_sisfonews";
$username = "root";
$password = " ";
$db = '';

try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());

}

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$sql = "UPDATE berita SET judul='$judul', isi='$isi', id_kategori='$kategori' WHERE id_berita='$id'";

echo $sql;

try {
	$stmt = $db->prepare($sql);
	$stmt->execute();
	echo "Berita Berhasil Diubah";
}
catch(PDOException $e) {
	echo "Berita GAGAL";
	echo $e->getMessage();
	
}


 ?>