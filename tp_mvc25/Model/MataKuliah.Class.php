<?php
include_once "model/DB.class.php";

class MataKuliah extends DB{
    function getMataKuliah()
    {
        $query = "SELECT * FROM matakuliah";
        return $this->execute($query);
    }

    function getMataKuliahById($id)
    {
        $query = "SELECT * FROM matakuliah WHERE id_matakuliah = $id";
        return $this->execute($query);
    }

    function addMataKuliah($data)
    {
        $nama = $data['nama_matakuliah'];
        $sks = $data['jumlah_sks'];

        $query = "INSERT INTO matakuliah(nama_matakuliah, jumlah_sks) 
                  VALUES ('$nama', '$sks')";
        return $this->execute($query);
    }

    function updateMataKuliah($data)
    {
        $id = $data['id'];
        $nama = $data['nama_matakuliah'];
        $sks = $data['jumlah_sks'];

        $query = "UPDATE matakuliah SET nama_matakuliah = '$nama', jumlah_sks = '$sks' WHERE id_matakuliah = $id";
        return $this->execute($query);
    }

    function deleteMataKuliah($id)
    {
        $query = "DELETE FROM matakuliah WHERE id_matakuliah = $id";
        return $this->execute($query);
    }
}
?>