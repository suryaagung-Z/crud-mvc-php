<?php
class User_models extends Database
{
    public function showAll()
    {
        $query = "SELECT * FROM `data`";
        $this->query($query);
        return $this->results();
    }

    public function getById($id)
    {
        $query = "SELECT * FROm `data` WHERE id = :id";
        $this->query($query);
        $this->bind(':id', $id);
        return $this->result();
    }

    public function add($val)
    {
        $nama            = htmlspecialchars($val['nama']);
        $nisn            = htmlspecialchars($val['nisn']);
        $tempatlahir     = htmlspecialchars($val['tempatlahir']);
        $tgllahir        = htmlspecialchars($val['tgllahir']);
        $email           = htmlspecialchars($val['email']);
        $ayah            = htmlspecialchars($val['ayah']);
        $ibu             = htmlspecialchars($val['ibu']);
        $penghasilanortu = htmlspecialchars($val['penghasilanortu']);

        $foto = $this->upload();
        if (!$foto) die();

        $query = "INSERT INTO `data` VALUES('', :nama, :nisn, :tempatlahir, :tgllahir, :email, :ayah, :ibu, :penghasilanortu, :foto)";
        $this->query($query);
        $this->bind(':nama', $nama);
        $this->bind(':nisn', $nisn);
        $this->bind(':tempatlahir', $tempatlahir);
        $this->bind(':tgllahir', $tgllahir);
        $this->bind(':email', $email);
        $this->bind(':ayah', $ayah);
        $this->bind(':ibu', $ibu);
        $this->bind(':penghasilanortu', $penghasilanortu);
        $this->bind(':foto', $foto);

        if ($this->affectedRows() > 0) {
            echo "<script> alert('Berhasil menambah data'); window.location.replace('" . BASE_URL . "'); </script>";
            return false;
        } else {
            echo "<script> alert('Gagal menambah data'); window.location.replace('" . BASE_URL . "'); </script>";
            return false;
        }
    }

    public function upload()
    {
        $namafile = $_FILES['foto']['name'];
        $size     = $_FILES['foto']['size'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $error    = $_FILES['foto']['error'];

        $ekstensiTrue = ['jpg', 'jpeg', 'png'];
        $explode = explode('.', $namafile);
        $namaEkstensiUser = strtolower(end($explode));

        if ($error == 4) {
            echo "<script> alert('Masukan foto'); window.location.replace('" . BASE_URL . "add'); </script>";
            return false;
        }

        if (!in_array($namaEkstensiUser, $ekstensiTrue)) {
            echo "<script> alert('Hanya memperbolehkan jpg, jpeg, dan png'); window.location.replace('" . BASE_URL . "add'); </script>";
            return false;
        }

        if ($size > 1000000) {
            echo "<script> alert('Batas maksimal ukuran file 1MB'); window.location.replace('" . BASE_URL . "add'); </script>";
            return false;
        }

        $newfilename = uniqid() . '.' . $namaEkstensiUser;

        move_uploaded_file($tmp_name, 'image/user/' . $newfilename);
        return $newfilename;
    }

    public function update($id, $val)
    {
        $getData = $this->getById($id);
        if (!$getData || is_null($getData)) {
            echo "<script> alert('Data tidak ditemukan'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        }

        $nama            = htmlspecialchars($val['nama']);
        $nisn            = htmlspecialchars($val['nisn']);
        $tempatlahir     = htmlspecialchars($val['tempatlahir']);
        $tgllahir        = htmlspecialchars($val['tgllahir']);
        $email           = htmlspecialchars($val['email']);
        $ayah            = htmlspecialchars($val['ayah']);
        $ibu             = htmlspecialchars($val['ibu']);
        $penghasilanortu = htmlspecialchars($val['penghasilanortu']);

        if ($_FILES['foto']['error'] == 4) {
            $foto = $getData['foto'];
        } else {
            $foto = $this->upload();
            if (!$foto) {
                die();
            } else {
                unlink('image/user/' . $getData['foto']);
            }
        }

        $query = "UPDATE `data`
                    SET nama = :nama,
                        nisn = :nisn,
                        tempat_lahir = :tempat_lahir,
                        tanggal_lahir = :tanggal_lahir,
                        email = :email,
                        nama_ayah = :nama_ayah,
                        nama_ibu = :nama_ibu,
                        penghasilan_ortu = :penghasilan_ortu,
                        foto = :foto
                    WHERE id = :id";

        $this->query($query);
        $this->bind(':nama', $nama);
        $this->bind(':nisn', $nisn);
        $this->bind(':tempat_lahir', $tempatlahir);
        $this->bind(':tanggal_lahir', $tgllahir);
        $this->bind(':email', $email);
        $this->bind(':nama_ayah', $ayah);
        $this->bind(':nama_ibu', $ibu);
        $this->bind(':penghasilan_ortu', $penghasilanortu);
        $this->bind(':foto', $foto);
        $this->bind(':id', $id);
        $result = $this->affectedRows();

        if (
            ($nama == $getData['nama']) &&
            ($nisn == $getData['nisn']) &&
            ($tempatlahir == $getData['tempat_lahir']) &&
            ($tgllahir == $getData['tanggal_lahir']) &&
            ($email == $getData['email']) &&
            ($ayah == $getData['nama_ayah']) &&
            ($ibu == $getData['nama_ibu']) &&
            ($penghasilanortu == $getData['penghasilan_ortu']) &&
            ($foto == $getData['foto'])
        ) {
            echo "<script> alert('Tidak ada perubahan'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        }

        if ($result > 0) {
            echo "<script> alert('Berhasil memperbarui data'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        } else {
            echo "<script> alert('Gagal memperbarui data'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        }
    }

    public function delete($id, $oldPhoto)
    {
        $query = "DELETE FROM `data` WHERE id = :id";
        $this->query($query);
        $this->bind(':id', $id);

        if ($this->affectedRows() > 0) {
            unlink('image/user/' . $oldPhoto);

            echo "<script> alert('Data berhasil dihapus'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        } else {
            echo "<script> alert('Data gagal dihapus'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        }
    }
}
