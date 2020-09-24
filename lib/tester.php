<?php 

// $file = file_get_contents("wordlist.txt");
// $pisah = explode("pisah", $file);

// var_dump($pisah);
// print_r($pisah[100]);
// $kata = [];
// $no = 0;

// $jml_pisah = count($pisah);
// echo $jml_pisah;

// for ($i=0; $i < $jml_pisah; $i++) { 
// 	echo $pisah[$i];
// 	if (stristr("--", '$pisah[$i]')) {
// 		echo "ada";
// 	}
// }

// print_r($pisah);
// var_dump($pisah);
// $a = "'";
// foreach ($pisah as $p => $value) {

	// ereg($a, $value,$mathes1);
	// preg_match("|$a|", $value, $mathes2);
	// echo $value;
	// if (preg_match("/^[$value\s]+$/", "'")) {
	// 	echo "ketemu </br>";
	// }
	// echo $p;
	// if ($value == "--dashboard") {
	// 	echo "sama";
	// }else{

	// }

// }
// print_r($mathes1[1]);
// print_r($mathes2[1]);
// echo $a;

// echo $file;

// if (preg_grep("$file", ["select"])) {
// 	# code...
// }

// preg_match(, 'wadau icimonji', $mathes);
// print_r($mathes);	
$wl = file_get_contents("wordlistMerah.txt");
echo $wl;
// $kataTerlarang = implode("|", explode(" ", file_get_contents("wordlistMerah.txt")));
// echo $kataTerlarang;
// menghapus spasi
$data = " drop";

if (preg_match("/".$wl." /mi", $data)) {

	// $status    = "Blocked";
	// $kategory  = "Berbahaya";

	// return array($status, $kategory);
	echo "benar".$data;
}else{

	// $status    = "Online";
	// $kategory  = "Ringan";

	// return array($status, $kategory);
	echo "salah".$data;
}
// arsort($data);
// echo json_encode($data);
// foreach ($data as $key => $value) {
// 	echo $value->id;
// }
?>