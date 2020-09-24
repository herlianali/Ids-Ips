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
				<form action="" method="get">
					<h5>Pencarian Mahasiswa By Nim</h5>
					<input type="text" class="col s3" name="nim">
					<button type="submit" class="btn btn-sm">Submit</button>
				</form>
	        	<table class="highlight">
	        		<thead>
			          <tr>
			              <th>Nim</th>
			              <th>Nama</th>
			              <th>Kelas</th>
			          </tr>
			          <tr>
			          	<?php
			          	if(isset($_GET['nim']) ) {
							// Get input
							$nim = $_GET['nim'];
							// Check database
							$query  = "SELECT nim, nama, kelas FROM user WHERE nim = '$nim'"; 
							$result = mysqli_query($koneksi,$query) or die((is_object($koneksi)) ? mysqli_error($koneksi) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));

							while($row = mysqli_fetch_array($result)) {
								// Get values

								echo "<td>".$row["nim"]."</td>";
								echo "<td>".$row["nama"]."</td>";
								echo "<td>".$row["kelas"]."</td>";

							}
						}
						?>
			          	
			          </tr>
			        </thead>
			        
	        	</table>
	        </span>
	      </div>
	    </div>
	</div>
</div>

<?php include "templates/footer.php"; ?>