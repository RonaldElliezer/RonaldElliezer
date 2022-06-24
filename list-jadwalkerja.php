<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Jadwal Kerja | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>List Jadwal Kerja</h3>
    </header>

    <nav>
        <a href="form-jadwalkerja.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Deskripsi</th>
            <th>Shif</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM jadwal_kerja";
        $query = mysqli_query($db, $sql);

        while($jadwalkerja = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$jadwalkerja['ID_Jadwal_Kerja']."</td>";
            echo "<td>".$jadwalkerja['Deskripsi']."</td>";
            echo "<td>".$jadwalkerja['Shif']."</td>";

            echo "<td>";
            echo "<a href='form-editjadwalkerja.php?ID_Jadwal_Kerja=".$jadwalkerja['ID_Jadwal_Kerja']."'>Edit</a> | ";
            echo "<a href='hapus-jadwalkerja.php?ID_Jadwal_Kerja=".$jadwalkerja['ID_Jadwal_Kerja']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>