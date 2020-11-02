<?php 
require 'model/Koneksi.php';
class pengumpulan extends Koneksi
{
	private $conn;
	protected $nama;
	protected $nim;
	protected $kelas;
	protected $praktikum;
	protected $file;
	
	public function __construct()
	{
		$this->conn = Koneksi::connect();
	} 
	
	public function tambahData($nama, $nim, $kelas, $praktikum, $tanggal, $file)
	{
		mysqli_query($this->conn, "INSERT INTO pengumpulan (`nim`, `nama`, `kelas`, `praktikum`, `tanggal`, `file`) VALUES('$nim','$nama','$kelas','$praktikum','$tanggal','$file')");
		/*if($data){
			$respon = array(
					  "display" => "display:none",
					  "notif"   => "data telah terinput",
					);
			return $respon;
		}else{
			return 
		}
		*/
	}
}


?>
