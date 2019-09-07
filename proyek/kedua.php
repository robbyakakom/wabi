<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    echo "Ini PHP dalam html" ;
  ?>
  <h1 id="judul">Ini File ke dua</h1>
  <button>Sembuyikan</button>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem recusandae voluptas maiores harum deleniti numquam expedita, quam hic ullam pariatur corrupti facere est, quo esse. Beatae quisquam earum perspiciatis tempora!
  </p>
  <?php
    echo "Ini PHP dalam html" ;
  ?>
</body>
</html>
<script src="jquery-3.4.1.min.js"></script>

<script>
$( document ).ready(function() {
  $("button").click(function(){
    $("#judul").toggle() ;
    $("button").text("Tampilkan") ;
  })
})
</script>