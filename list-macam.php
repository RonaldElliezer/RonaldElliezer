<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Macam Pelayanan | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>List Macam Pelayanan</h3>
    </header>

    <nav>
        <a href="form-macam.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM macam_pelayanan";
        $query = mysqli_query($db, $sql);

        while($macam = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$macam['ID_Macam']."</td>";
            echo "<td>".$macam['Deskripsi_Macam']."</td>";

            echo "<td>";
            echo "<a href='form-editmacam.php?ID_Macam=".$macam['ID_Macam']."'>Edit</a> | ";
            echo "<a href='hapus-macam.php?ID_Macam=".$macam['ID_Macam']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>