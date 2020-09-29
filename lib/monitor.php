<?php 

	function Ips($data)
	{
		$merah   = file_get_contents(realpath(dirname(__FILE__))."/wordlistMerah.txt");
		if (preg_match("/".$merah." /mi", $data)) {

			$status    = "Blocked";
			$kategory  = "Berbahaya";

			return array($status, $kategory);

		}else{

			$status    = "Online";
			$kategory  = "Ringan";

			return array($status, $kategory);

		}

	}

	function browser()
	{
		$browser = strtolower($_SERVER['HTTP_USER_AGENT']);
		if (strpos($browser, 'firefox')) {
			if (strpos($browser, 'mobile')) {
				return 'Firefox mobile divice';
			}else{
				return 'Firefox personal computer';
			}
		}elseif (strpos($browser, 'chrome')) {
			if (strpos($browser, 'mobile')) {
				return 'Chrome mobile divice';
			}else{
				return 'Chrome personal computer';
			}
		}elseif (strpos($browser, 'opera') || strpos($browser, 'opr/')) {
			if (strpos($browser, 'mobile')) {
				return 'Opera mobile divice';
			}else{
				return 'Opera personal computer';
			}
		}elseif (strpos($browser, 'edge')) {
			if (strpos($browser, 'mobile')) {
				return 'Edge mobile divice';
			}else{
				return 'Edge personal computer';
			}
		}elseif (strpos($browser, 'msie') || strpos($browser, 'trident/7')) {
			return 'Internet Explore';
		}
	}

	function Ids($value)
	{
		

		$xss   = file_get_contents(realpath(dirname(__FILE__))."/wordlistXSS.txt");
		$sqli  = file_get_contents(realpath(dirname(__FILE__))."/wordlistSQLI.txt");
		$all   = file_get_contents(realpath(dirname(__FILE__))."/wordlistALL.txt");

		$cek_ips   = Ips($value);
		$urlJson   = realpath(dirname(__FILE__))."/data.json";

		if (!is_file($urlJson)) {
			file_put_contents($urlJson," ");
		}
		
		if (!empty($value)) {

			if (preg_match('/'.$all.'/', $value)) {

				$lokasi = basename($_SERVER['SCRIPT_NAME']);

				$file 	  = file_get_contents($urlJson);
				$arr_data = json_decode($file, true);

				if (preg_match("/".$sqli, $value)) {
					$jenis = "sql-injection";
				}elseif (preg_match("/".$xss."/", $value)) {
					$jenis = "xss";
				}

				$last_data 	  = end($arr_data);
				$last_data_id = $last_data['id'];
				$arr_data [] = array(
					'id'		 => ++$last_data_id,
					'lokasi'	 => $lokasi,
					'skript'	 => $value,
					'jenis' 	 => $jenis,
					'ip_address' => $_SERVER['REMOTE_ADDR'],
					'browser' 	 => browser(),
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
?>