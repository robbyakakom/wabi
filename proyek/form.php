<?php include("header.php") ?>
  <h1>Input Data Karyawan</h1>
  <form action="hasil.php" method="get" onsubmit="return validasi()" name="karyawan">
    <table>
      <tr>
        <td><label for="nip">NIP</label></td>
        <td><input type="text" id="nip" name="nip"></td>
      </tr>
      <tr>
        <td><label for="nama_karyawan">Nama Karyawan</label></td>
        <td><input type="text" id="nama_karyawan" name="nama_karyawan"></td>
      </tr>
      <tr>
        <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
        <td>
            <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki"> 
              <label for="laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"> 
              <label for="perempuan">Perempuan</label>
        </td>
      </tr>
      <tr>
          <td><label for="agama">Agama</label></td>
          <td>
            <select name="agama" id="agama">
              <option value="">Silahkan Pilih</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katholik">Katholik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Kong Hu Chu">Kong Hu Chu</option>
              <option value="Kepercayaan">Kepercayaan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="alamat">Alamat</label></td>
          <td>
              <textarea name="alamat" id="alamat" cols="50" rows="3"></textarea>
          </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button type="submit">Simpan</button>
            </td>
          </tr>
    </table>
  </form>

  <script>
    function validasi() {
      var nip = karyawan.nip.value ;
      if(nip == ""){
        alert("Data NIP Kosong") ;
        return false ;
      }
    }
  </script>

<?php include("footer.php") ?>