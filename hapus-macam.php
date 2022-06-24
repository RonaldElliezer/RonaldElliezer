<?php

include("config.php");

if( isset($_GET['ID_Macam']) ){

    // ambil ID_Macam dari query string
    $ID_Macam = $_GET['ID_Macam'];

    // buat query hapus
    $sql = "DELETE FROM macam_pelayan WHERE ID_Macam=$ID_Macam";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-macam.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
