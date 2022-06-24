<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['insert'])){

    // ambil data dari formulir
    $ID_Jadwal_Kerja = $_POST['ID_Jadwal_Kerja'];
    $Deskripsi = $_POST['Deskripsi'];
    $Shif = $_POST['Shif'];

    // buat query
    $sql = "INSERT INTO jadwal_kerja (ID_Jadwal_Kerja, Deskripsi, Shif) VALUE ('$ID_Jadwal_Kerja', '$Deskripsi', '$Shif')";
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
