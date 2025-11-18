<?php
include_once "model/DB.class.php";

class jadwal extends DB{
    function getJadwal()
    {
        $query = "SELECT * FROM jadwal";
        return $this->execute($query);
    }

    function getJadwalById($id)
    {
        $query = "SELECT * FROM jadwal WHERE id_jadwal = $id";
        return $this->execute($query);
    }

    function addJadwal($data)
    {
        $id_dosen = $data['id_dosen'];
        $id_matakuliah = $data['id_matakuliah'];
        $hari = $data['hari'];
        $jam_mulai = $data['jam_mulai'];
        $jam_selesai = $data['jam_selesai'];
        $ruang = $data['ruang'];

        $query = "INSERT INTO jadwal (id_dosen, id_matakuliah, hari, jam_mulai, jam_selesai, ruang)
                  VALUES ('$id_dosen', '$id_matakuliah', '$hari', '$jam_mulai', '$jam_selesai', '$ruang')";
        return $this->execute($query);
    }

    function updateJadwal($data)
    {
        $id = $data['id'];
        $id_dosen = $data['id_dosen'];
        $id_matakuliah = $data['id_matakuliah'];
        $hari = $data['hari'];
        $jam_mulai = $data['jam_mulai'];
        $jam_selesai = $data['jam_selesai'];
        $ruang = $data['ruang'];

        $query = "UPDATE jadwal SET id_dosen = '$id_dosen', id_matakuliah = '$id_matakuliah', hari = '$hari', 
        jam_mulai = '$jam_mulai', jam_selesai = '$jam_selesai', ruang = '$ruang' WHERE id_jadwal = $id";
        return $this->execute($query);
    }

    function deleteJadwal($id)
    {
        $query = "DELETE FROM jadwal WHERE id_jadwal = $id";
        return $this->execute($query);
    }
}
?>