<?php 
    include("header.php") ;

    include("koneksi.php") ;

    $cari = isset($_POST['cari']) ? htmlspecialchars($_POST['cari']) : "" ;

    $sql = "SELECT * FROM `mahasiswa` WHERE `nim` LIKE '%".$cari."%' OR `nama` LIKE '%".$cari."%' OR `nilai` LIKE '%".$cari."%'" ;

    $query = mysqli_query($koneksi, $sql) ;
    
    ?>

    <?php include("menu.php") ?>

    <h1>Data Mahasiswa</h1>
    <table class="table">
      <tr>
        <td>NIM</td>
        <td>Nama</td>
        <td>Nilai</td>
        <td>Operasi</td>
      </tr>
      <?php while($data = mysqli_fetch_assoc($query)){ ?>
      <tr>
        <td><?php echo $data['nim'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['nilai'] ?></td>
        <td>
          <a class="btn btn-danger" href="hapus_mahasiswa.php?id=<?php echo $data['id']  ?>" onclick="return confirm('Apakah data ini akan dihapus?')">Hapus</a> 

          <a class="btn btn-info" href="ubah_mahasiswa.php?id=<?php echo $data['id']  ?>" >Ubah</a> 
        </td>
      </tr>
      <?php } ?>
    </table>

<?php mysqli_close($koneksi) ?>
<?php include("footer.php") ?>