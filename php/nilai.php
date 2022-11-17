<?php 
 session_start();
     if (!isset($_SESSION["login"])){
      header("Location: login.php");
      exit;
     }
    require "function.php";
    $pendaft = query("SELECT * FROM nilai");
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
          <a href="jadwal.php" >
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Jadwal Ujian KP</span>
          </a>
        </li>
        <li>
          <a href="nilai.php" class="active">
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
          <span class="dashboard">Nilai</span>
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
              <span class="data-title">No Ujian</span>
              <span class="data-list"><?= $lmb['pendaftaran_ujian_kp_id'];?></span>
            </div>
            <div class="data names">
              <span class="data-title">Nilai pembimbing lapangan</span>
              <span class="data-list"><?= $lmb['nilai_pembimbing_lapangan'];?></span>
            </div>
            <div class="data email">
              <span class="data-title">Nilai Pembmbing KP</span>
              <span class="data-list"><?= $lmb['nilai_pembimbing_kp'];?></span>
              
            </div>
            <div class="data laporan">
              <span class="data-title">Nilai penguji</span>
              <span class="data-list"><?= $lmb['nilai_penguji'];?></span>
              
            </div>
            <div class="data type">
              <span class="data-title">bukti nilai</span>
             <span class="data-list"><i class='bx bx-file'></i></span>
            </div>
          </div>
        </div>
        <?php endforeach ;?>
    </section>
    <!-- isi end -->
  </body>
</html>
