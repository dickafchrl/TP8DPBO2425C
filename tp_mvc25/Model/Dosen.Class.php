<?php
include_once "model/DB.class.php";

class Dosen extends DB{
    function getDosen()
    {
        $query = "SELECT * FROM dosen";
        return $this->execute($query);
    }

    function getDosenById($id)
    {
        $query = "SELECT * FROM dosen WHERE id_dosen = $id";
        return $this->execute($query);
    }

    function addDosen($data)
    {
        $nama = $data['nama'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        $query = "INSERT INTO dosen(nama, nidn, phone, join_date) 
                  VALUES ('$nama', '$nidn', '$phone', '$join_date')";
        return $this->execute($query);
    }

    function updateDosen($data)
    {
        $id = $data['id'];
        $nama = $data['nama'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        $query = "UPDATE dosen SET nama = '$nama', nidn = '$nidn', phone = '$phone', join_date = '$join_date' WHERE id_dosen = $id";
        return $this->execute($query);
    }

    function deleteDosen($id)
    {
        $query = "DELETE FROM dosen WHERE id_dosen = $id";
        return $this->execute($query);
    }
}
?>