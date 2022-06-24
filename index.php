<!DOCTYPE html>
<html>
<head>
    <title>Project TA | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>Project TA</h3>
        <h1>MANAJEMEN BENGKEL</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-karyawan.php">Insert Karyawan</a></li>
            <li><a href="list-karyawan.php">Data Karyawan</a></li>
            <li><a href="form-jadwalkerja.php">Insert Jadwal Kerja</a></li>
            <li><a href="list-jadwalkerja.php">Data Jadwal Kerja</a></li>
            <li><a href="form-macam.php">Insert Macam</a></li>
            <li><a href="list-macam.php">Data Macam</a></li>
        </ul>
    </nav>

    </body>
</html>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Insert Karyawan berhasil!";
            } else {
                echo "Insert Karywan gagal!";
            }
        ?>
    </p>
<?php endif; ?>
