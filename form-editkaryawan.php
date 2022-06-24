<?php

include("config.php");

// kalau tidak ada ID_Karyawan di query string
if( !isset($_GET['ID_Karyawan']) ){
    header('Location: list-karyawan.php');
}

//ambil ID_Karyawan dari query string
$ID_Karyawan = $_GET['ID_Karyawan'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM karyawan WHERE ID_Karyawan=$ID_Karyawan";
$query = mysqli_query($db, $sql);
$karyawan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>Edit Karyawan</h3>
    </header>

    <form action="proses-editkaryawan.php" method="POST">

        <fieldset>

            <input type="hidden" name="ID_Karyawan" value="<?php echo $karyawan['ID_Karyawan'] ?>" />

        <p>
            <label for="Nama_Karyawan">Nama: </label>
            <input type="text" name="Nama_Karyawan" placeholder="Nama lengkap" value="<?php echo $karyawan['Nama_Karyawan'] ?>" />
        </p>
        <p>
            <label for="Jabatan">Jabatan: </label>
            <textarea name="Jabatan"><?php echo $karyawan['Jabatan'] ?></textarea>
        </p>
        <p>
            <label for="NoTelp">Nomer Telpon: </label>
            <textarea name="NoTelp"><?php echo $karyawan['NoTelp'] ?></textarea>
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
