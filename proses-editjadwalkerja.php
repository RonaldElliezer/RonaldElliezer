<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $ID_Jadwal_Kerja = $_POST['ID_Jadwal_Kerja'];
    $Deskripsi = $_POST['Deskripsi'];
    $Shif = $_POST['Shif'];

    // buat query update
    $sql = "UPDATE jadwal_kerja SET Deskripsi='$Deskripsi', Shif='$Shif', NoTelp='$NoTelp' WHERE ID_Jadwal_Kerja=$ID_Jadwal_Kerja";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-jadwalkerja.php
        header('Location: list-jadwalkerja.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
