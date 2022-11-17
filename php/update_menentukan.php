<?php 
 session_start();
     if (!isset($_SESSION["login"])){
      header("Location: login.php");
      exit;
     }
  require "function.php";
    $id = $_GET['id'];
    $tam = query("SELECT * FROM anggota_kelompok WHERE id = $id")[0];

  if(isset($_POST["submit"])){
        if (ubah_anggota($_POST)>0){
            echo "<script>
                alert ('data berhasil diupdate');
                document.location.href = 'pendaftaran_kp.php'
            </script>" ;
        }
        else {
            echo "<script>
                alert ('data gagal diupdate');
                document.location.href = 'pendaftaran_kp.php'
            </script>";
        }
    }
   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style-form.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <span class="logo_name">Poliwangi</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="pendaftaran_kp.php" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Pendaftaran KP</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-box"></i>
            <span class="links_name">Surat Izin KP</span>
          </a>
        </li>
        <li>
          <a href="lembar_kerja_KP.html">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Lembar Kerja KP</span>
          </a>
        </li>
        <li>
          <a href="pendaftaran_ujian_KP.html">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Pendaftaran Ujian KP</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Jadwal Ujian KP</span>
          </a>
        </li>
        <li>
          <a href="ungah_nilai.html">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Mengunggah Nilai</span>
          </a>
        </li>

        <li class="log_out">
          <a href="login.html">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <a href="pendaftaran_kp.php"><i class="bx bxs-chevrons-left"></i></a>
          <span class="dashboard">Pendaftaran KP</span>
        </div>
         <div class="profile-details">
          <a href="mahasiswa.html">
          <span class="admin_name">Helmi Nafan Ananda</span>
          <i class="bx bx-chevron-down"></i>
          </a>
        </div>
      </nav>
      <!-- isi -->
       <div class="cont">
        <div class="box-form1">
          <div class="title"><h1>Update Ketua</h1></div>
          <form action="" method="post">
            <input type="hidden" name="id" id="id" required value="<?= $tam["id"];?>"/>
            <div class="box1">
              <div class="input">
                <label for="nama">Nama</label>
                <input class="masuk" type="text" name="nama_anggota" placeholder="nama" id="nama" required value="<?= $tam["nama_anggota"];?>"/>
              </div>
              <div class="input">
                <label for="NIM">NIM</label>
                <input class="masuk" type="text" name="nim" placeholder="NIM" id="NIM" required value="<?= $tam["nim"];?>"/>
              </div>
             <div class="tombol">
                <button name="submit" type="submit">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
