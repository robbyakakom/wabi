<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Web Kampus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="mahasiswa_db.php">Tampil Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mahasiswa_tambah.php">Tambah Mahasiswa</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="mahasiswa_db.php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>