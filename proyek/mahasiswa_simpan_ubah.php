<?php 
include("header.php") ;
//tangkap data dari form
$id = isset($_POST["id"]) ? htmlspecialchars($_POST["id"]) : ""  ;
$nim = isset($_POST["nim"]) ? htmlspecialchars($_POST["nim"]) : ""  ;
$nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "" ;
$nilai = isset($_POST["nilai"]) ? htmlspecialchars($_POST["nilai"]) : "" ;

// 1. membuat koneksi : mysqli_connect
include("koneksi.php") ;

// 2. mempersiapkan perintah sql
$sql_update = "UPDATE `mahasiswa` SET `nim`='".$nim."',`nama`='".$nama."',`nilai`='".$nilai."' WHERE `id` = '".$id."'" ;

// 3. menjalankan query : mysqli_query
$query = mysqli_query($koneksi, $sql_update) ;

if($query)
  echo "<script> alert('Data Berhasil Diubah'); location.assign('mahasiswa_db.php');  </script>" ;
else
  echo "<script> alert('Data Gagal Dihubah'); location.assign('mahasiswa_db.php');  </script>" ;

// 6. tutup koneksi : mysqli_close
mysqli_close($koneksi) ;
include("footer.php") ;
?>