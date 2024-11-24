<?php 
    session_start();
    session_destroy();
    echo "<script>Swal.fire('Berhasil', 'Logout berhasil!', 'success').then(() => { window.location.href = 'login.php'; });</script>";
    exit;