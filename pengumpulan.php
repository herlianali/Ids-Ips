<?php 
include "./templates/header.php";
include "controller/pengumpulanController.php";

if (isset($_POST['button'])) {

  $nama      = Ids($_POST["nama"]);
  $nim       = Ids($_POST["nim"]);
  $kelas 	   = Ids($_POST["kelas"]);
  $praktikum = Ids($_POST["praktikum"]);
  $tanggal   = date("Y-m-d");
  $file      = "laporan.pdf";

  $pengumpulan = new pengumpulan;
  $pengumpulan->tambahData($nama, $nim, $kelas, $praktikum, $tanggal, $file);
}

?>

<div class="container">
  <h2>Pengumpulan Praktikum</h2>
  <div class="card-panel">
    <div class="container">
      <form class="" action="" method="post">
        <div class="row">
          <div class="col s12">
            <div class="row">
              <div class="input-field">
                <input id="Nama" type="text" class="validate" name="nama">
                <label for="Nama">Nama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <input id="Nim" type="text" class="validate" name="nim">
                <label for="Nim">Nim</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <input id="Kelas" type="text" class="validate" name="kelas">
                <label for="Kelas">Kelas</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <select name="praktikum">
                  <option value="" disabled selected>Pilih Praktikum</option>
                  <option value="Algoritma Pemrogaman">Algoritma Pemrogaman</option>
                  <option value="Algoritma Struktur Data">Algoritma Struktur Data</option>
                  <option value="Pemrograman Berbasis Object">Pemrograman Berbasis Object</option>
                  <option value="Basis Data">Basis Data</option>
                  <option value="Sistem Operasi">Sistem Operasi</option>
                  <option value="Jaringan Komputer">Jaringan Komputer</option>
                  <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                  <option value="Sistem Digital">Sistem Digital</option>
                </select>
                <label>Praktikum</label>
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field">
                <div class="btn">
                  <span><i class="material-icons">file_upload</i></span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <button type="submit" name="button" class="btn waves-effect waves-light">Kirim<i class="material-icons right">send</i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include "./templates/footer.php" ?>
