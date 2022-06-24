<!DOCTYPE html>
<html>
<head>
    <title>Insert Karyawan | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>Insert Karyawan</h3>
    </header>

    <form action="proses-insertkaryawan.php" method="POST">

        <fieldset>

        <p>
            <label for="Nama_Karyawan">Nama: </label>
            <input type="text" name="Nama_Karyawan" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="Jabatan">Jabatan: </label>
            <textarea name="Jabatan"></textarea>
        </p>
        <p>
            <label for="NoTelp">Nomer Telpon: </label>
            <textarea name="NoTelp"></textarea>
        </p>
        <p>
            <input type="submit" value="Insert" name="insert" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
