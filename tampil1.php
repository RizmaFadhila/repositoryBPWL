
 <?php
include 'database1.php';
$db = new database1();
?>
    <div class="row justify-content-center">
      <div class="col-auto">
        <table class="table table-bordered table-striped">
        <thead>
          <tr class ="table-light">
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Program Pendidikan</th>
            <th scope="col">Aksi</th>
          </tr>
          <?php
         
         
    $no = 1;
    foreach ($db->tampil_data() as $x){
         	?>
        </thead>
        <tbody>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php print $x['nama']; ?></td>
              <td><?php print $x['email']; ?></td>
              <td><?php print $x['jurusan']; ?></td>
              <td>
              <a href="edit1.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
              <a href="proses1.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
             </td>
          </tr>
                  <?php
                  }
                  ?>                
        </tbody>
      </div>
    </div>
