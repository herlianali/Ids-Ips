<?php 

$file = file_get_contents("wordlist.txt");
// $json = json_decode("");

$pisah = explode("pisah", $file);

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

foreach ($pisah as $p => $value) {

	// echo $value;
	if (preg_match("/^[$value\s]+$/", "'")) {
		echo "ketemu </br>";
	}
	// echo $p;
	// if ($value == "--") {
	// 	echo "sama";
	// }else{

	// }

}

// echo $file;

// if (preg_grep("$file", ["select"])) {
// 	# code...
// }

 ?>