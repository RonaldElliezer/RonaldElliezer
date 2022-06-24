<!DOCTYPE html>
<html>
<head>
    <title>Insert Jadwal Kerja | MANAJEMEN BENGKEL</title>
</head>

<body>
    <header>
        <h3>Insert Jadwal Kerja</h3>
    </header>

    <form action="proses-insertjadwalkerja.php" method="POST">

        <fieldset>

        <p>
            <label for="Deskripsi">Deskripsi: </label>
            <input type="text" name="Deskripsi" placeholder="Deskripsi lengkap" />
        </p>
        <p>
            <label for="Shif">Shif: </label>
            <textarea name="Shif"></textarea>
        </p>
        <p>
            <input type="submit" value="Insert" name="insert" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
