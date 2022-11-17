<?php 
 session_start();
     if (!isset($_SESSION["login"])){
      header("Location: login.php");
      exit;
     }
  require "function.php";
  if(isset($_POST["submit"])){
        if (tambah_anggota($_POST)>0){
            echo "<script>
                alert ('data berhasil ditambah');
                document.location.href = 'pendaftaran_kp.php'
            </script>" ;
            
        }
        else {
            echo "<script>
                alert ('data gagal ditambah');
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
          <a href="coba.html"><i class='bx bxs-chevrons-left'></i></a>
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
          <div class="title"><h1>Daftar Mahasiswa</h1></div>
          <form action="" method="post">
            <div class="box1">
              <input type="hidden" name="id" id="id" required/>
              <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama_mahasiswa" placeholder="nama" id="nama" />
              </div>
              <div class="input">
                <label for="NIM">NIM</label>
                <input type="text" name="nim" placeholder="NIM" id="NIM" />
              </div>
              <div class="input">
                <label for="Alamat">Alamat</label>
                <input
                  type="text"
                  name="alamat"
                  placeholder="Alamat"
                  id="Alamat"
                />
              </div>
              <div class="input">
                <label for="Kelas">Kelas</label>
                <input
                  type="text"
                  name="kelas"
                  placeholder="Kelas"
                  id="Kelas"
                />
              </div>
              <div class="input">
                <label for="Email">Email</label>
                <input
                  type="text"
                  name="email"
                  placeholder="Email"
                  id="Email"
                />
              </div>
              <div class="input">
                <label for="dosen">Ketua</label>
                <select name="anggota_kelompok_id" id="dosen">
                    <option value="">Pilih Ketua</option>
                    <?php 
                        $lihat = mysqli_query($conn, "SELECT * FROM anggota_kelompok");
                        while($role = mysqli_fetch_assoc($lihat)){
                            echo "<option value=$role[id]> $role[nama_anggota] </option>";
                        } 
                    ?>
                </select>
              </div>
              <div class="input">
                <label for="dosen">Kelompok</label>
                <select name="id_user" id="dosen">
                    <option value="">Pilih Ketua</option>
                    <?php 
                        $lihat = mysqli_query($conn, "SELECT * FROM user");
                        while($role = mysqli_fetch_assoc($lihat)){
                            echo "<option value=$role[id]> $role[username] </option>";
                        } 
                    ?>
                </select>
              </div>
            </div>
            <div class="tombol">
            <button name="submit">tambah data</button>
          </div>
          </form>
          
        </div>
       
      </div>
    </section>
  </body>
</html>
