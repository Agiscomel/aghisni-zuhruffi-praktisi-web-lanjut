<?php 
 session_start();
     if (!isset($_SESSION["login"])){
      header("Location: login.php");
      exit;
     }
    require "function.php";
    $pendaft = query("SELECT pendaftaran_ujian_kp.id, acc_ujian_id, pendaftaran_ujian_kp.jadwal_ujian, laporan_kp, pendaftaran_kp_id, dosen_penguji FROM pendaftaran_ujian_kp INNER JOIN acc_ujian ON pendaftaran_ujian_kp.acc_ujian_id = acc_ujian.id");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/jadwalStyle.css" />
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
          <a href="pendaftaran_kp.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Pendaftaran KP</span>
          </a>
        </li>
        <li>
          <a href="surat_izin.php">
            <i class="bx bx-box"></i>
            <span class="links_name">Surat Izin KP</span>
          </a>
        </li>
        <li>
          <a href="lembar_kerja.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Lembar Kerja KP</span>
          </a>
        </li>
        <li>
          <a href="pendaftran_ujian.php">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Pendaftaran Ujian KP</span>
          </a>
        </li>
        <li>
          <a href="jadwal.php" class="active">
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
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Jadwal Ujian KP</span>
        </div>
        <div class="profile-details">
          <a href="mahasiswa.html">
          <span class="admin_name">Helmi Nafan Ananda</span>
          <i class="bx bx-chevron-down"></i>
          </a>
        </div>
      </nav>
      <!-- isi -->
      <div class="container">
        <?php foreach ($pendaft as $lmb) :?>
        <div class="activity-data">
          <div class="box">
            <div class="data names">
              <span class="data-title">Hari</span>
                <span class="data-list"><?php $tanggal = $lmb['jadwal_ujian']; echo date("l-d-m-Y", strtotime($tanggal)) ?></span>
            </div>
            <div class="data email">
              <span class="data-title">Waktu Mulai</span>
              <span class="data-list"><?php $tanggal = $lmb['jadwal_ujian']; echo date("H:i:s", strtotime($tanggal)) ?></span>
            </div>
            <div class="data laporan">
              <span class="data-title">Judul Kerja Praktek</span>
              <span class="data-list"><?= $lmb['laporan_kp'];?></span>
            </div>
            <div class="data type">
              <span class="data-title">Dosen Penguji</span>
              <span class="data-list"><?= $lmb["dosen_penguji"];?></span>
            </div>
          </div>
        </div>
        <?php endforeach ;?>
    </section>
    <!-- isi end -->
  </body>
</html>
