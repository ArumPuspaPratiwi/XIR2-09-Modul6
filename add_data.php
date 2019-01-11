<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
  </head>
  <style media="screen">
    body{
      background-image: url(2.jpg);
      font-family: sans-serif;
    }
    h2 {
      color: #fff;
    }

    .login {
      padding: 1em;
      margin: 2em auto;
      width: 17em;
      background: #fff;
      border-radius: 3px;
    }

    label {
      font-size: 10pt;
      color: #555;
    }

    input[type="text"],
    input[type="password"]{
      padding: 8px;
      width: 95%;
      background: #efefef;
      border: 0;
      font-size: 10pt;
      margin: 6px 0px;
    }

    .tombol {
      background: #3498db;
      color: #fff;
      border: 0;
      padding: 5px 8px;
    }
  </style>
  <body>
    <center><h2>TAMBAH DATA</h2></center>
    <div class="login">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <div>
        <label>NIS :</label>
        <input type="text" name="nis" />
      </div>
      <div>
        <label>Nama :</label>
        <input type="text" name="nama" />
      </div>
      <div>
        <label>Alamat :</label>
        <input type="text" name="alamat" />
      </div>
      <div>
        <input type="submit" name="submit" class="tombol" value="Simpan" />
      </div>
    </form>
    </div>
  </body>
</html>

<!-- PHP Script Begin -->
<?php
  require_once"./connect.php";

  //jika field nis dan nama diisi lalu disubmit
  if (isset($_POST['nis']) && isset($_POST['nama'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    //Tambahkan data baru ke tabel
    $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
      echo '<center><h2>Data Berhasil Ditambahkan</h2></center>
      <a href="logout.php"><h2>Logout</h2></a>
      ';
    }
    else {
      echo 'Gagal Menambahkan Data <br />
      <a href="add_data.php">Kembali</a>';
      echo mysqli_error($connect);
    }
  }

  echo '<br />';
  //memanggil file record.php untuk menampilkan hasil
  require_once"./record.php";
?>
<!-- PHP Script End -->
