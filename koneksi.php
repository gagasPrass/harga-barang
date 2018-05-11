<?php
class koneksi {
	private $server = "localhost";
	private $username = "id4929213_gagas";
	private $password = "gagas1997";
	private $db = "haarga_barang";
	private $hubungan;

	function ambilKoneksi(){
		$hubungan = new mysqli($this->server, $this->username, $this->password, $this->db);
		return $hubungan;

	}

}

?>