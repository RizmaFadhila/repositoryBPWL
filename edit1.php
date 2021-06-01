<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ubah data diri</title>
</head>
<body>
<div>
<body background="foto1 (2).jpeg">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-info" href="#">Politeknik Caltex Riau</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-info" href="formdaftar.php"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="tampil1.php">Informasi Pendaftaran</a>
      </li>
      </nav>
<span class="border border-light text-center"><h1>Penerimaan Mahasiswa Baru </h1></span>
<span class="border border-light text-center"><h2>Edit data diri</h2></span>
</div>
    <?php include "database1.php"; 
    $db = new database1();
    ?>
<form action="proses1.php?aksi=update" method="post">
    <div class="row justify-content-center">
      <div class="col-auto">
      <?php
foreach($db->edit($_GET['id']) as $d){
?>
<html>
<head>  
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<table class="table">
<table width="600" border="0" cellspasing="0" cellpanding="0">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" name="nama" id = "nama" value="<?php echo $d['nama']?>" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" name="email" id = "email" value="<?php  echo $d['email']?>" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Program Pendidikan</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" name="jurusan" id = "jurusan" value="<?php  echo $d['jurusan']?>" width="100%" required></td>
                    </tr> 
                    <tr>
                    <td><input type="hidden"name="id" id = "id" value="<?php echo $d['id']?>" width="100%" required></td>
                    </tr>    
                </table>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
    </table>
</body>
</html>
<?php
}
?>