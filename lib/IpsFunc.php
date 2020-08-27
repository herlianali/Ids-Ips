<?php 

class IpsFunc
{
	protected $data;
	// private $clientIp;

	public function __construct()
	{
		$this->data = json_decode(file_get_contents("lib/data.json"),true);
		// $this->clientIp = $_SERVER['REMOTE_ADDR'];
	}

	public function cek($ipClient)
	{
		foreach ($this->data as $d) {
			if ($ipClient == $d['ip_address'] && $d['status'] == "Blocked") {
				header('location:hack.php');
			}
		}
	}
}

?>