<?php 
// mengaktifkan session php
session_start();
 
// menghapus semua session
session_destroy();
echo '<script type="text/javascript">
        alert("BERHASIL LOG OUT");
        window.location.href = "index.php";
    </script>
 ';
?>