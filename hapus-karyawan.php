<?php

include("config.php");

if( isset($_GET['ID_Karyawan']) ){

    // ambil ID_Karyawan dari query string
    $ID_Karyawan = $_GET['ID_Karyawan'];

    // buat query hapus
    $sql = "DELETE FROM karyawan WHERE ID_Karyawan=$ID_Karyawan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-karyawan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
