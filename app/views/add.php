<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>css/user_index.css">
</head>

<body>

    <a href="<?= BASE_URL ?>" class="link">kembali</a>

    <p class="head">Form Pendaftaran SMK Informatika Pesat</p>

    <form action="<?= BASE_URL ?>add/adddata" method="POST" enctype="multipart/form-data">
        <div class="box">
            <label for="nama">Nama Lengkap :</label>
            <input type="text" name="nama" id="nama" autocomplete="off" required>
        </div>

        <div class="box">
            <label for="nisn">NISN :</label>
            <input type="number" name="nisn" id="nisn" autocomplete="off" required>
        </div>

        <div class="box">
            <label for="tempatlahir">Tempat Lahir :</label>
            <input type="text" name="tempatlahir" id="tempatlahir" autocomplete="off" required>
        </div>

        <div class="box">
            <label for="tgllahir">Tanggal Lahir :</label>
            <input type="date" name="tgllahir" id="tgllahir" autocomplete="off" required>
        </div>

        <div class="box">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
        </div>

        <div class="box inputDouble">
            <div class="subinput">
                <label for="ayah">Nama Ayah :</label>
                <input type="text" name="ayah" id="ayah" autocomplete="off" required>
            </div>

            <div class="subinput">
                <label for="ibu">Nama Ibu :</label>
                <input type="text" name="ibu" id="ibu" autocomplete="off" required>
            </div>
        </div>

        <div class="box">
            <label for="penghasilanortu">Penghasilan Orang Tua :</label>
            <input type="text" name="penghasilanortu" id="penghasilanortu" autocomplete="off" required>
        </div>

        <div id="boxinputfile" class="box">
            <label for="foto">Foto Anda:</label>
            <input type="file" name="foto" id="foto" required>
            <img class="hide">
        </div>

        <div class="box">
            <button type="submit" name="submit">tambah</button>
        </div>
    </form>

    <script src="<?= BASE_URL ?>js/script-add.js"></script>
</body>

</html>