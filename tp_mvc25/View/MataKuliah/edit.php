<h2>Edit Mata Kuliah</h2>

<form method="POST" action="index.php?page=matakuliah&action=edit&id=<?= $matakuliah['id_matakuliah'] ?>">
    <div class="card p-3">

        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matakuliah" value="<?= $matakuliah['nama_matakuliah'] ?>" class="form-control" required>

        <label class="mt-3">SKS:</label>
        <input type="number" name="jumlah_sks" value="<?= $matakuliah['jumlah_sks'] ?>" class="form-control" required>

        <button class="btn btn-primary mt-3" type="submit">Update</button>
        <a href="index.php?page=matakuliah&action=index" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</form>