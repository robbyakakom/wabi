<?php 
include("header.php") ;
//tangkap data dari form
$nim = isset($_POST["nim"]) ? htmlspecialchars($_POST["nim"]) : ""  ;
$nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "" ;
$nilai = isset($_POST["nilai"]) ? htmlspecialchars($_POST["nilai"]) : "" ;

// 1. membuat koneksi : mysqli_connect
include("koneksi.php") ;

// 2. mempersiapkan perintah sql
$sql_isi = "INSERT INTO `mahasiswa`(`nim`, `nama`, `nilai`) VALUES ('".$nim."','".$nama."','".$nilai."')" ;

// 3. menjalankan query : mysqli_query
$query = mysqli_query($koneksi, $sql_isi) ;

if($query)
  echo "<script> alert('Data Berhasil Disimpan'); location.assign('mahasiswa_db.php');  </script>" ;
else
  echo "<script> alert('Data Gagal Disimpan'); location.assign('mahasiswa_db.php');  </script>" ;

// 6. tutup koneksi : mysqli_close
mysqli_close($koneksi) ;
include("footer.php") ;
?>