<?php include("header.php") ?>

<?php include("menu.php") ?>

<h1>Form Entry Mahasiswa</h1>
<form action="mahasiswa_simpan.php" method="post">
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="input" class="form-control" id="nim" name="nim" placeholder="Isikan NIM">
  </div>
  <div class="form-group">
    <label for="nama">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama Mahasiswa">
  </div>
  <div class="form-group">
    <label for="nilai">Nilai</label>
    <select class="form-control" id="nilai" name="nilai">
      <option value="">-Pilih Nilai-</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include("footer.php") ?>