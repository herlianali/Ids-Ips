<?php 
include "Koneksi.php";

class Jadwal extends Koneksi
{
	protected $koneksi;

	public function getAll()
	{
		$koneksi = new Koneksi;
		var_dump($koneksi->connect());
	}

}

?>