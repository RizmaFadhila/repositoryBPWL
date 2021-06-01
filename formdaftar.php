<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Registrasi</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-info" href="#">Politeknik Caltex Riau</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-info" href="formdaftar.php"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="tampil1.php">Informasi Registrasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-info" href="#">Biaya Pendidikan</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<body background="foto1 (2).jpeg">
<span class="border border-light text-center"><h1>Registrasi</h1></span>
 <span class="border border-light text-center"><h1>Mahasiswa Baru</h1></span>                 
    <title>Pendaftaran</title>

</head>
<body>

<form action="proses1.php?aksi=tambah" method="post">
<div class="container">
  <div class="row no-gutters">
  <form>
    <div class="col-12 col-sm-6 col-md-8 ">
    <div class="form-group">
                    <label>Program Pendidikan :</label>
                    <input type="text" class="form-control" name="jurusan" id = "jurusan">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap :</label>
                    <input type="text" class="form-control" name="nama" id = "nama">
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <input type="email" class="form-control" name="email" id = "email">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-lebel">Tandai</label>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
    <div class="col-6 col-md-4 text-bottomright"></div>
  </div>
</div>
 </form>
    
</body>
</html>