<?php 
require 'function.php';

   $id = $_GET["id"];
   if ( hapus_pendaftaran($id) > 0) {
    echo "<script>
                alert ('data berhasil dihapus');
                document.location.href = 'pendaftaran_kp.php'
            </script>";
            
        }
        else {
            echo "<script>
                alert ('data gagal dihapus');
                document.location.href = 'pendaftaran_kp.php'
            </script>";
        }
?>