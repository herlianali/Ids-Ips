<?php include "./templates/header.php" ?>

<div class="row">
  <div class="container">
    <center>
      <h3>Ambil Modul Untuk Dipelajari</h3>
    </center>
    <div class="card-panel">
		<form action="" method="POST">
			<input type="text" class="col s3" name="cari" />
			<input type="submit" class="btn btn-sm btn-primary" name="kirim" value="cari" />
		</form>
		<?php
		$connect = mysqli_connect("localhost","herlian","aliyasa","skripsi");
		if(isset($_POST['kirim'])){
			$cari = Ids($_POST['cari']);
			echo "<br><br><b>Hasil Pencarian Dari : ".$cari."</b>";
		}
		?>
      <table>
        <thead>
          <tr>
            <td>Judul</td>
            <td>Oleh</td>
            <td>Download</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Algoritma Pemrograman</td>
            <td>Aslab Informatika</td>
            <td><a href="#" class="waves-effect waves-light btn"><i class="material-icons">file_download</i></a></td>
          </tr>
        <?php 
			if(isset($_POST['cari'])){
				$cari = $_POST['cari'];
				$data = mysqli_query($connect,"SELECT * FROM modul WHERE concat(`judul`,`upload_by`)like '%$cari%'");
			}else{
				$data = mysqli_query($connect,"SELECT * FROM modul");
			}
			
			$no = 1;
			while($d = mysqli_fetch_array($data)){
			
        ?>
        <tr>
			<td><?= $d['judul'] ?></td>
			<td><?= $d['upload_by'] ?></td>
			<td><a href="#" class="waves-effect waves-light btn"><i class="material-icons">file_download</i></a></td>
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "./templates/footer.php" ?>
