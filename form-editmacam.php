<?php

include("config.php");

// kalau tidak ada ID_Macam di query string
if( !isset($_GET['ID_Macam']) ){
    header('Location: list-macam.php');
}

//ambil ID_Macam dari query string
$ID_Macam = $_GET['ID_Macam'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM macam_pelayanan WHERE ID_Macam=$ID_Macam";
$query = mysqli_query($db, $sql);
$macam = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Macam Pelayan | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>Edit Macam Pelayan</h3>
    </header>

    <form action="proses-editmacam.php" method="POST">

        <fieldset>

            <input type="hidden" name="ID_Macam" value="<?php echo $macam['ID_Macam'] ?>" />

        <p>
            <label for="Deskripsi_Macam">Deskripsi: </label>
            <input type="text" name="Deskripsi_Macam" placeholder="Deskripsi" value="<?php echo $macam['Deskripsi_Macam'] ?>" />
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        
        </fieldset>


    </form>

    </body>
</html>
