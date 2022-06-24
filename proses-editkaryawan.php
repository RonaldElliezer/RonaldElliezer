<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $ID_Karyawan = $_POST['ID_Karyawan'];
    $Nama_Karyawan = $_POST['Nama_Karyawan'];
    $Jabatan = $_POST['Jabatan'];
    $NoTelp = $_POST['NoTelp'];

    // buat query update
    $sql = "UPDATE karyawan SET Nama_Karyawan='$Nama_Karyawan', Jabatan='$Jabatan', NoTelp='$NoTelp' WHERE ID_Karyawan=$ID_Karyawan";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-karyawan.php
        header('Location: list-karyawan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
