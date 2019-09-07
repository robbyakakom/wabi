<?php include("header.php") ?>
<?php include("fungsibuatan.php") ?>

<?php
  $penulis = "Robby Cokro B." ;
  $tanggal = date("j F Y",strtotime("2019-08-29")) ;
  $pengumuman = ucwords("Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, quos, illo laudantium temporibus perspiciatis, maxime autem soluta blanditiis sint quia odit. Quas voluptatibus voluptas iure repudiandae amet natus aperiam?") ;
  $pecahNama = explode(" ",$penulis) ;
?>


<?php 
  echo "Penulis : " . $penulis ."<br>" ;
  echo "Nama Depan : " . $pecahNama[0] ."<br>" ;
  echo "Tanggal : " . $tanggal . "<br>" ;
  echo "Pengumuman : <br> ". $pengumuman ;
  echo "<hr>" ;
  nama($penulis) ;
?>

<?php include("footer.php") ?>

