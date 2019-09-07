<?php 
include("header.php") ;
//tangkap data dari link
$id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : ""  ;

// 1. membuat koneksi : mysqli_connect
include("koneksi.php") ;

// 2. mempersiapkan perintah sql
$sql_hapus = "DELETE FROM `mahasiswa` WHERE `id`='".$id."'" ;

// 3. menjalankan query : mysqli_query
$query = mysqli_query($koneksi, $sql_hapus) ;

if($query)
  echo "<script> alert('Data Berhasil Dihapus'); location.assign('mahasiswa_db.php');  </script>" ;
else
  echo "<script> alert('Data Gagal Dihapus'); location.assign('mahasiswa_db.php');  </script>" ;

// 6. tutup koneksi : mysqli_close
mysqli_close($koneksi) ;
include("footer.php") ;
?>