<?php include "./templates/header.php" ?>

<div class="container">
  <h2>Pengumpulan Praktikum</h2>
  <div class="card-panel">
    <div class="container">
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col s12">
            <div class="row">
              <div class="input-field">
                <input id="Nama" type="text" class="validate">
                <label for="Nama">Nama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <input id="Nim" type="text" class="validate">
                <label for="Nim">Nim</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <input id="Kelas" type="text" class="validate">
                <label for="Kelas">Kelas</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <input id="Praktikum" type="text" class="validate">
                <label for="Praktikum">Praktikum</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <select>
                  <option value="" disabled selected>Pilih Praktikum</option>
                  <option value="1">Algoritma Pemrogaman</option>
                  <option value="2">Algoritma Struktur Data</option>
                  <option value="3">Pemrograman Berbasis Object</option>
                  <option value="4">Basis Data</option>
                  <option value="5">Sistem Operasi</option>
                  <option value="6">Jaringan Komputer</option>
                  <option value="7">Rekayasa Perangkat Lunak</option>
                  <option value="8">Sistem Digital</option>
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
