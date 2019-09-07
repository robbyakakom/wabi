    <?php 
        include("header.php") ;
        $mahasiswa = array(
          0=>array("nim"=>"0099","nama"=>"Budi","nilai"=>"A"),
          1=>array("nim"=>"0100","nama"=>"Amir","nilai"=>"B"),
          2=>array("nim"=>"0101","nama"=>"Mira","nilai"=>"B"),
        );

        ?>
        <h1>Data Mahasiswa</h1>
        <table class="table">
          <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Nilai</td>
          </tr>
          <?php foreach($mahasiswa as $data){ ?>
          <tr>
            <td><?php echo $data['nim'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['nilai'] ?></td>
          </tr>
          <?php } ?>
        </table>

<?php include("footer.php") ?>