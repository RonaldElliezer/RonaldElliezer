<?php

include("config.php");

// kalau tidak ada ID_Jadwal_Kerja di query string
if( !isset($_GET['ID_Jadwal_Kerja']) ){
    header('Location: list-jadwalkerja.php');
}

//ambil ID_Jadwal_Kerja dari query string
$ID_Jadwal_Kerja = $_GET['ID_Jadwal_Kerja'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM jadwal_kerja WHERE ID_Jadwal_Kerja=$ID_Jadwal_Kerja";
$query = mysqli_query($db, $sql);
$jadwalkerja = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal Kerja | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>Edit Jadwal Kerja</h3>
    </header>

    <form action="proses-editjadwalkerja.php" method="POST">

        <fieldset>

            <input type="hidden" name="ID_Jadwal_Kerja" value="<?php echo $jadwalkerja['ID_Jadwal_Kerja'] ?>" />

        <p>
            <label for="Deskripsi">Deskripsi: </label>
            <input type="text" name="Deskripsi" placeholder="Deskripsi lengkap" value="<?php echo $jadwalkerja['Deskripsi'] ?>" />
        </p>
        <p>
            <label for="Shif">Shif: </label>
            <textarea name="Shif"><?php echo $jadwalkerja['Shif'] ?></textarea>
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        
        </fieldset>


    </form>

    </body>
</html>
