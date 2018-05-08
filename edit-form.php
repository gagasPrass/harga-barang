<h2>Form Edit</h2>
<hr>
<form action="update.php" method="post">

<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();


if($koneksi->connect_error) {
	die("koneksi gagal : " . $koneksi->connect_error);
}else{
	echo "";
}

$qry = "select * from harga_barang where kode='" . 
	$_GET["kode"] . "'";
$data = $koneksi->query($qry);	

if($data->num_rows <= 0) {
	echo "Mas/Mba. .. Isi data sesuai prosedur cukkk!!!";
}else{
	while($hasil = $data->fetch_assoc()){
		global $namaBarang;
		$namaBarang = $hasil["nama_barang"];
		global $harga;
		$harga = $hasil["harga"];
	}

}
?>


<table>
	<tr>
	<td>KODE </td>
		<td>
		: <input type="text" name="kode" readonly="true" value = <?php echo $_GET["kode"];?>></td>
		</tr> 
		<tr>
			<td>NAMA BARANG </td>
		<td>: <input type="text" name="namaBarang"
			value=<?php echo $namaBarang?>></td>
		</tr>
	<tr>
		<td>HARGA </td> 
		<td>: <input type="text" name="harga"
			value=<?php echo $harga ?>></td>
	</tr>
	
		<td><input type="submit" value="Simpan"></td>
</table>
</form>