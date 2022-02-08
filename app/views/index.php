<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Admin</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>css/admin_index.css">
</head>

<body>
    <a href="<?= BASE_URL ?>add" class="link">tambah data</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Penghasilan Orang Tua</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ($data['data'] as $d) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['nisn']; ?></td>
                <td><?= $d['tempat_lahir']; ?></td>
                <td><?= date('j F Y', strtotime($d['tanggal_lahir'])); ?></td>
                <td><?= $d['email']; ?></td>
                <td><?= $d['nama_ayah']; ?></td>
                <td><?= $d['nama_ibu']; ?></td>
                <td><?= $d['penghasilan_ortu']; ?></td>
                <td><img src="image/user/<?= $d['foto']; ?>"></td>
                <td>
                    <div class="aksi">
                        <a href="<?= BASE_URL ?>update?id=<?= $d['id'] ?>">Edit</a>
                        <a href="<?= BASE_URL ?>delete?id=<?= $d['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>