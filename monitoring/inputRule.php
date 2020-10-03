<?php 
include "templates/header.php";

$fileAll = "../lib/wordlistAll.txt";

if (isset($_POST['sql'])) {

	$file 	 = "../lib/wordlistSQLI.txt";
	$myfile  = file_get_contents($file);
	$myfile	.= "|(".$_POST['kata'].")";

	file_put_contents($file, $myfile);
	// echo $_POST['kata']." sql";

}elseif (isset($_POST['xss'])) {

	$file 	 = "../lib/wordlistXSS.txt";
	$myfile  = file_get_contents($file);
	$myfile	.= "|(".$_POST['kata'].")";

	file_put_contents($file, $myfile);
	// echo $_POST['kata']." xss";

}elseif (isset($_POST['danger'])) {
	
	$file 	 = "../lib/wordlistMerah.txt";
	$myfile  = file_get_contents($file);
	$myfile	.= "|(".$_POST['kata'].")";

	file_put_contents($file, $myfile);
	// echo $_POST['kata']." xss";

}


?>

<div class="row">
	<div class="col m3"></div>

	<div class="card col m6">
		<div class="card-content">
			<h5>masukkan rule(kata) injection dan pilih kategorinya</h5>
			<br>
			<form action="" method="POST">
				<div class="input-field">
					<input type="text" name="kata" placeholder="example: select">
					<label>Rule Injection</label>
				</div>
				<span><b>nb</b>: input hanya bisa satu kata atau satu karakter saja</span><br><br>
				<input class="waves-effect waves-light btn" type="submit" name="sql" value="sql rule">
				<input class="waves-effect waves-light btn" type="submit" name="xss" value="xss rule">
				<input class="waves-effect waves-light btn red" type="submit" name="danger" value="danger rule">
			</form>
		</div>
	</div>

	<div class="col m3"></div>
</div>



<?php include "templates/footer.php"; ?>