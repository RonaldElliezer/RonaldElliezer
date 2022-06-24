<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $ID_Macam = $_POST['ID_Macam'];
    $Deskripsi_Macam = $_POST['Deskripsi_Macam'];

    // buat query update
    $sql = "UPDATE macam_pelayanan SET Deskripsi_Macam='$Deskripsi_Macam' WHERE ID_Macam=$ID_Macam";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-jadwalkerja.php
        header('Location: list-macam.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
