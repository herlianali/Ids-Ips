<?php include "templates/header.php" ?>

  <div class="row">
      <div class="col m1"></div>

      <div class="card col m10">
        <div class="card-content">
          <span class="card-title">IDS & IPS Attack List</span>
          <table class="responsive-table" id="table_id">
	        <thead>
	          <tr>
	              <th>Ip Address</th>
	              <th>Browser</th>
	              <th>Jenis Serangan</th>
	              <th>Tanggal</th>
	              <th>Jam</th>
	              <th>Aksi</th>
	          </tr>
	        </thead>

	        <tbody>

            <?php 

              $file = file_get_contents("../lib/data.json");
              $data = json_decode($file);
              arsort($data);
              foreach ($data as $key => $value) {
            ?>
	          <tr>
	            <td><?= $value->ip_address ?></td>
	            <td><?= $value->browser ?></td>
	            <td><?= $value->jenis ?></td>
	            <td><?= $value->tanggal ?></td>
	            <td><?= $value->jam ?></td>
	            <td><a href="#modal<?= $value->id ?>" class="waves-effect waves-light btn modal-trigger">Detail</a></td>
	          </tr>
            <?php } ?>

	        </tbody>
	      </table>
        </div>
      </div>
      
      <div class="col m1"></div>
  </div>

<?php 
$file = file_get_contents("../lib/data.json");
$data = json_decode($file);

foreach ($data as $key => $value) {

?>
<!-- Detail modal -->
  <div id="modal<?= $value->id?>" class="modal">
    <div class="modal-content">
      <h4>Detail Serangan</h4>
      <p>
      	Halaman Yang Di Serang Adalah : <b><?= $value->lokasi; ?></b><br>
      	Script yang digunakana : <br><b><?= htmlspecialchars($value->skript); ?></b><br>
      	Kategori Serangan : <b><?php echo $value->kategory; ?></b><br>
      	Status User : 
        <?php 
        if ($value->status == "Online") {
          echo '<b class="green-text">Online</b>';
        }elseif ($value->status == "Blocked") {
          echo '<b class="red-text"> Blocked</b>';
        }
        ?>
      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-danger btn">Tutup</a>
    </div>
  </div>
<?php } ?>

<?php include "templates/footer.php";?>
