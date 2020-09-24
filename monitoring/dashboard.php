<?php 
include "templates/header2.php"; 
include "../model/Pengumpulan.php";

$pengumpulan = new Pengumpulan;
$data = $pengumpulan->getAll();
?>

<br><br>
<div class="container">
	<div class="row">
	    <div class="col s12 m12">
	      <div class="card-panel teal">
	        <span class="white-text">
	        	<table class="highlight">
	        		<thead>
			          <tr>
			              <th>Nim</th>
			              <th>Nama</th>
			              <th>Kelas</th>
			              <th>Praktikum</th>
			              <th>File</th>
			          </tr>
			        </thead>
			        <?php 
			        	foreach ($data as $d) {
			        ?>
			        <tbody>
			          <tr>
			            <td><?= $d['nim'] ?></td>
			            <td><?= $d['nama'] ?></td>
			            <td><?= $d['kelas'] ?></td>
			            <td><?= $d['praktikum'] ?></td>
			            <td><?= $d['file'] ?></td>
			          </tr>
			        </tbody>
			        <?php } ?>
	        	</table>
	        </span>
	      </div>
	    </div>
	</div>
</div>

<?php include "templates/footer.php"; ?>