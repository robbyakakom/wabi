  <?php
    include("header.php") ;

    echo "<h1>Output Data </h1>" ;
    if(!isset($_GET['nip'])) {
      die("NIP tidak diisi") ;
    }
    $nip = $_GET['nip'] ;
    $nama_karyawan = $_GET['nama_karyawan'] ;
    $jenis_kelamin = $_GET['jenis_kelamin'] ;
    $agama = $_GET['agama'] ;
    $alamat = $_GET['alamat'] ;
  ?>
  <table>
    <tr>
      <td>NIP : </td>
      <td><?php echo $nip ?></td>
    </tr>
    <tr>
      <td>Nama Karyawan : </td>
      <td><?php echo $nama_karyawan ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin : </td>
      <td><?php echo $jenis_kelamin ?></td>
    </tr>
    <tr>
      <td>Agama : </td>
      <td><?php echo $agama ?></td>
    </tr>
    <tr>
      <td>Alamat : </td>
      <td><?php echo $alamat ?></td>
    </tr>
  </table>

  <?php include("footer.php) ?>