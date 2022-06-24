<?php

include("config.php");

if( isset($_GET['ID_Jadwal_Kerja']) ){

    // ambil ID_Jadwal_Kerja dari query string
    $ID_Jadwal_Kerja = $_GET['ID_Jadwal_Kerja'];

    // buat query hapus
    $sql = "DELETE FROM jadwal_kerja WHERE ID_Jadwal_Kerja=$ID_Jadwal_Kerja";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-jadwalkerja.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
