<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['insert'])){

    // ambil data dari formulir
    $ID_Karyawan = $_POST['ID_Karyawan'];
    $Nama_Karyawan = $_POST['Nama_Karyawan'];
    $Jabatan = $_POST['Jabatan'];
    $NoTelp = $_POST['NoTelp'];

    // buat query
    $sql = "INSERT INTO karyawan (ID_Karyawan, Nama_Karyawan, Jabatan, NoTelp) VALUE ('$ID_Karyawan', '$Nama_Karyawan', '$Jabatan', '$NoTelp')";
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
