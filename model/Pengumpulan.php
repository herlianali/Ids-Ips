<?php 

require "Koneksi.php";

class Pengumpulan extends Koneksi
{
	protected $koneksi;

	public function __construct()
	{
		$this->koneksi = parent::connect();
	}

	public function getAll()
	{
		$data = mysqli_query($this->koneksi,"SELECT * FROM pengumpulan ORDER BY tanggal ASC");
		while ($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
}

// class Pengumpulan extends Koneksi
// {
// 	protected $koneksi;

// 	public function __construct()
// 	{
// 		$this->koneksi = parent::connect();
// 	}

// 	public function getAll()
// 	{
// 		$res = [];
// 		$query = "SELECT * FROM pengumpulan";
// 		$execute = $this->koneksi->query($query);
// 		while ($data = $execute->fetch_array()){
// 			$respon = array(
// 				'nim' => $data['nim'],
// 				'nama' => $data['nama'],
// 				'kelas' => $data['kelas'],
// 				'praktikum' => $data['praktikum'],
// 				'file' => $data['file']
// 			);
// 			$res[] = $respon;
// 		}
// 		return json_encode($res);
// 	}

// 	public function find_by_id($id)
// 	{

// 	}
// }


// $pengumpulan = new Pengumpulan;
// var_dump($pengumpulan->getAll());
?>