<h2>Tambah Dosen</h2>

<form method="POST" action="index.php?page=dosen&action=create">
    <div class="card p-3">

        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" required>

        <label class="mt-3">NIDN:</label>
        <input type="text" name="nidn" class="form-control" required>

        <label class="mt-3">Phone:</label>
        <input type="text" name="phone" class="form-control" required>

        <label class="mt-3">Join Date:</label>
        <input type="date" name="join_date" class="form-control" required>

        <button class="btn btn-success mt-3" type="submit">Simpan</button>
        <a href="index.php?page=dosen&action=index" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</form>
