<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>css/user_index.css">

</head>

<body>
    <a href="<?= BASE_URL ?>" class="link">kembali</a>

    <p class="head">Update Data</p>

    <form action="<?= BASE_URL ?>update/updatedata/<?= $data['dataById']['id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="box">
            <label for="nama">Nama Lengkap :</label>
            <input type="text" name="nama" id="nama" autocomplete="off" required value="<?= $data['dataById']['nama'] ?>">
        </div>

        <div class="box">
            <label for="nisn">NISN :</label>
            <input type="number" name="nisn" id="nisn" autocomplete="off" required value="<?= $data['dataById']['nisn'] ?>">
        </div>

        <div class="box">
            <label for="tempatlahir">Tempat Lahir :</label>
            <input type="text" name="tempatlahir" id="tempatlahir" autocomplete="off" required value="<?= $data['dataById']['tempat_lahir'] ?>">
        </div>

        <div class="box">
            <label for="tgllahir">Tanggal Lahir :</label>
            <input type="date" name="tgllahir" id="tgllahir" autocomplete="off" required value="<?= $data['dataById']['tanggal_lahir'] ?>">
        </div>

        <div class="box">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" autocomplete="off" required value="<?= $data['dataById']['email'] ?>">
        </div>

        <div class="box inputDouble">
            <div class="subinput">
                <label for="ayah">Nama Ayah :</label>
                <input type="text" name="ayah" id="ayah" autocomplete="off" required value="<?= $data['dataById']['nama_ayah'] ?>">
            </div>

            <div class="subinput">
                <label for="ibu">Nama Ibu :</label>
                <input type="text" name="ibu" id="ibu" autocomplete="off" required value="<?= $data['dataById']['nama_ibu'] ?>">
            </div>
        </div>

        <div class="box">
            <label for="penghasilanortu">Penghasilan Orang Tua :</label>
            <input type="text" name="penghasilanortu" id="penghasilanortu" autocomplete="off" required value="<?= $data['dataById']['penghasilan_ortu'] ?>">
        </div>

        <div class="box">
            <label for="foto">Foto Anda:</label>
            <input type="file" name="foto" id="foto">
            <div id="boximage">
                <img src="<?= BASE_URL . 'image/user/' . $data['dataById']['foto'] ?>" width="50">
                <span id="arrow" class="hide">➜</span>
                <img id="showimg" class="hide">
            </div>
        </div>

        <div class="box">
            <button type="submit" name="submit">simpan</button>
        </div>
    </form>

    <script src="<?= BASE_URL ?>js/script-update.js"></script>
</body>

</html>