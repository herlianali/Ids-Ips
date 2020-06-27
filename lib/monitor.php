<?php 

	function Ips($data)
	{
		
		if (preg_match("/drop/", $data)) {

			$status    = "Blocked";
			$kategory  = "Berbahaya";

			return array($status, $kategory);

		}else{

			$status    = "Online";
			$kategory  = "Ringan";

			return array($status, $kategory);

		}

	}

	function Ids($value)
	{
		// echo $value;
		$injection = $value." ";
		$cek_ips   = Ips($value);
		$urlJson   = realpath(dirname(__FILE__))."/data.json";

		if (!is_file($urlJson)) {
			file_put_contents($urlJson," ");
		}
		
		if (!empty($value)) {

			if (preg_match('/select/', $value)) {

				$file 	  = file_get_contents($urlJson);
				$arr_data = json_decode($file, true);

				if (preg_match("/select/", $injection)) {
					$jenis = "sql-injection";
				}elseif (preg_match("/<html>/", $injection)) {
					$jenis = "xss";
				}

				$last_data 	  = end($arr_data);
				$last_data_id = $last_data['id'];
				$arr_data [] = array(
					'id'		 => ++$last_data_id,
					'skrip'		 => $injection,
					'jenis' 	 => $jenis,
					'ip_address' => $_SERVER['REMOTE_ADDR'],
					'browser' 	 => 'Mozilla/5.0 (X11; Linux x86_64; rv:75.0) Gecko/20100101 Firefox/75.0',
					'kategory' 	 => $cek_ips[1],
					'status' 	 => $cek_ips[0],
					'jam' 		 => date('H:i:s'),
					'tanggal' 	 => date('Y-m-d')
				);

				$jsonFile = json_encode($arr_data, JSON_PRETTY_PRINT);
				file_put_contents($urlJson, $jsonFile);

				return $value;

			}else{

				return $value;

			}

		}

	}

	// var_dump(Ips("drop"));
	// kurang e
	// 1. mencocokkan dengan wordlist
	// 2. pengisian lokasi atau file yang di inject
?>