<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['insert'])){

    // ambil data dari formulir
    $ID_Macam = $_POST['ID_Macam'];
    $Deskripsi_Macam = $_POST['Deskripsi_Macam'];

    // buat query
    $sql = "INSERT INTO macam_pelayanan (ID_Macam, Deskripsi_Macam) VALUE ('$ID_Macam', '$Deskripsi_Macam')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
