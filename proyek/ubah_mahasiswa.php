<?php include("header.php") ?>

<?php include("menu.php") ?>

<?php

$id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : ""  ;

include("koneksi.php") ;

$sql_baca = "SELECT `nim`, `nama`, `nilai` FROM `mahasiswa` WHERE `id`='".$id."'" ;

$query = mysqli_query($koneksi, $sql_baca) ;

$data = mysqli_fetch_assoc($query) ;

?>


<h1>Form Update Mahasiswa</h1>
<form action="mahasiswa_simpan_ubah.php" method="post">

  <input type="hidden" name="id" value="<?php echo $id ?>">

  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="input" class="form-control" id="nim" name="nim" placeholder="Isikan NIM" value="<?php echo $data['nim'] ?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>"placeholder="Isikan Nama Mahasiswa">
  </div>
  <div class="form-group">
    <label for="nilai">Nilai</label>
    <select class="form-control" id="nilai" name="nilai">
      <option value="">-Pilih Nilai-</option>
      <option value="A" <?php echo $data['nilai'] == "A" ? "selected" : "" ?> >A</option>
      <option value="B" <?php echo $data['nilai'] == "B" ? "selected" : "" ?>>B</option>
      <option value="C" <?php echo $data['nilai'] == "C" ? "selected" : "" ?>>C</option>
      <option value="D" <?php echo $data['nilai'] == "D" ? "selected" : "" ?>>D</option>
      <option value="E" <?php echo $data['nilai'] == "E" ? "selected" : "" ?>>E</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include("footer.php") ?>