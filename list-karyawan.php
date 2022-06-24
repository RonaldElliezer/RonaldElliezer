<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Karyawan | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>List Karyawan</h3>
    </header>

    <nav>
        <a href="form-karyawan.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Nomer Telpon</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM karyawan";
        $query = mysqli_query($db, $sql);

        while($karyawan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$karyawan['ID_Karyawan']."</td>";
            echo "<td>".$karyawan['Nama_Karyawan']."</td>";
            echo "<td>".$karyawan['Jabatan']."</td>";
            echo "<td>".$karyawan['NoTelp']."</td>";

            echo "<td>";
            echo "<a href='form-editkaryawan.php?ID_Karyawan=".$karyawan['ID_Karyawan']."'>Edit</a> | ";
            echo "<a href='hapus-karyawan.php?ID_Karyawan=".$karyawan['ID_Karyawan']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>