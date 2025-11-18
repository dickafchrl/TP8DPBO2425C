<h2>Tambah Mata Kuliah</h2>

<form method="POST" action="index.php?page=matakuliah&action=create">
    <div class="card p-3">

        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matakuliah" class="form-control" required>

        <label class="mt-3">SKS:</label>
        <input type="number" name="jumlah_sks" class="form-control" required>

        <button class="btn btn-success mt-3" type="submit">Simpan</button>
        <a href="index.php?page=matakuliah&action=index" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</form>
