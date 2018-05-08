<?php


include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();


if($koneksi->connect_error) {
	die("koneksi gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data SUKSES!";
}

//$query = "insert into harga_barang (kode, nama_barang, harga) ".
//	"values(" . $_POST["kode"] . ", '" .$_POST["namaBarang"] .
//		"', " . $_POST["harga"] .")";
$query = "update harga_barang " .
		"set nama_barang = '" . $_POST["namaBarang"] . "' ," .
		"    harga = " . $_POST["harga"] . " " .
		"where kode = " . $_POST["kode"];

if($koneksi->query($query) == true) {
	echo "<br>Data " . $_POST["namaBarang"] . " sudah tersimpan. Data bisa dilihat" . '<a href="main.php"> disini</a>';
}else{
	echo "error : " . $query . " -> " . $koneksi->error;
}

$koneksi->close();

?>

