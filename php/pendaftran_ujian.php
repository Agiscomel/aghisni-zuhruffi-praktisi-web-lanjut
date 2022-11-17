<?php 
 session_start();
     if (!isset($_SESSION["login"])){
      header("Location: login.php");
      exit;
     }
  require "function.php";
  $pendaft = query("SELECT pendaftaran_ujian_kp.id, acc_ujian_id, pendaftaran_ujian_kp.jadwal_ujian, laporan_kp, pendaftaran_kp_id, dosen_penguji FROM pendaftaran_ujian_kp INNER JOIN acc_ujian ON pendaftaran_ujian_kp.acc_ujian_id = acc_ujian.id");
  if(isset($_POST["submit"])){
        if (pendaftran_ujian($_POST)>0){
            echo "<script>
                alert ('data berhasil ditambah');
                document.location .href = 'pendaftran_ujian.php'
            </script>" ;
            
        }
        else {
            echo "<script>
                alert ('data gagal ditambah');
                document.location.href = 'pendaftran_ujian.php'
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
    <link rel="stylesheet" href="../css/daftar_ujian.css">
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
          <a href="pendaftaran_kp.php" >
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
          <a href="pendaftran_ujian.php" class="active">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Pendaftaran Ujian KP</span>
          </a>
        </li>
        <li>
          <a href="jadwal.html">
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
          <a href="login.php">
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
          <span class="dashboard">Pendaftaran Ujian KP</span>
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
        <div class="box-form">
          <div class="title"><h1>Upload Surat Ujian KP</h1></div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="box1">
              <div class="input">
                <label for="Alamat_KP">No Id Pendaftaran</label>
                <input
                  type="text"
                  name="pendaftaran_kp_id"
                  placeholder="Alamat"
                  id="Alamat_KP"
                />
              </div>
              <div class="input">
                <label for="dosen">Dosen</label>
                <select  id="dosen" name="acc_ujian_id" >
                 <option value="">Pilih Dosen</option>   
                  <?php 
                        $lihat = mysqli_query($conn, "SELECT * FROM acc_ujian");
                        while($role = mysqli_fetch_assoc($lihat)){
                            echo "<option value=$role[id]> $role[dosen_penguji] </option>";
                        } 
                    ?>
              </select>
              </div>
              <div class="input">
                <label for="file">Laporan</label>
                <input class="file" type="file" name="laporan_kp" id="file" />
              </div>
              <div class="input">
                <label>View File</label>
                <button class="view" name="submit"><i class='bx bxs-file-find'></i>Kirim File</button>
              </div>
          </form>
        </div>
      </div>
      <div class="activity-data">
        <?php foreach ($pendaft as $pdu) :?>
        <h2>Informasi Pendaftran</h2>
          <div class="box">
            <div class="data type">
              <span class="data-title">No Ujian</span>
              <span class="data-list"><?= $pdu["id"];?></span>
            </div>
            <div class="data type">
              <span class="data-title">Dosen Pembingbing</span>
              <span class="data-list"><?= $pdu["dosen_penguji"];?></span>
            </div>
            <div class="data proposal">
              <span class="data-title">laporan</span>
              <a href="preview_lap.php?id=<?= $pdu['id'];?>"><span class="data-list"><i class='bx bx-file'></i></span></a>
            </div>
            <div class="data status">
              <span class="data-title">Status</span>
              <span class="data-list"> 
                <a href="update_pendaft_uji.php?id=<?= $pdu["id"];?>""><button class="update">Update</button> </a>
                <a href="hapus_pendaftaran_ujian.php?id=<?= $pdu["id"];?>"><button class="delete" name="submit">delete</button></a>
              </span>
            </div>
          </div>
          <?php endforeach ;?>
        </div>
      </div>
    </section>
    <!-- isi end -->
  </body>
</html>
