<?php 
 session_start();
     if (!isset($_SESSION["login"])){
      header("Location: login.php");
      exit;
     }
  require "function.php";
  $id = $_GET['id'];
  $pendaft = query("SELECT pendaftaran_ujian_kp.id, acc_ujian_id, pendaftaran_ujian_kp.jadwal_ujian, laporan_kp, pendaftaran_kp_id, dosen_penguji FROM pendaftaran_ujian_kp INNER JOIN acc_ujian ON pendaftaran_ujian_kp.acc_ujian_id = acc_ujian.id WHERE pendaftaran_ujian_kp.id = $id")[0];
  if(isset($_POST["submit"])){
        if (update_pendaftaran_ujian($_POST)>0){
            echo "<script>
                alert ('data berhasil ditambah');
                document.location.href = 'pendaftran_ujian.php'
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
          <a href="pendaftaran_ujian_KP.html" class="active">
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
        <div class="box-form1">
          <div class="title"><h1>Download Surat Ujian KP</h1></div>
          <form action="" >
            <div class="box2">
                <button class="tombol1"><i class='bx bxs-download'></i>Download File</button>
            </div>
          </form>
        </div>
        <div class="box-form">
          <div class="title"><h1>Upload Surat Ujian KP</h1></div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="box1">
                 <input type="hidden" name="id" id="id" required value="<?= $pendaft["id"];?>"/>
                 <input type="hidden" name="file_lama" id="id" required value="<?= $pendaft["laporan_kp"];?>"/>
              <div class="input">
                <label for="Alamat_KP"c</label>
                <input
                  type="text"
                  name="pendaftaran_kp_id"
                  placeholder="pendaftaran_kp_id"
                  id="Alamat_KP"
                  required value="<?= $pendaft["pendaftaran_kp_id"];?>"
                />
              </div>
              <div class="input">
                <label for="dosen">Dosen</label>
                <select  id="dosen" name="acc_ujian_id" required>
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
                <input class="file" type="file" name="laporan_kp" id="file"/>
              </div>
              <div class="input">
                <label>View File</label>
                <button class="view" name="submit"><i class='bx bxs-file-find'></i>View File</button>
              </div>
          </form>
        </div>
      </div>

    </section>
    <!-- isi end -->
  </body>
</html>
