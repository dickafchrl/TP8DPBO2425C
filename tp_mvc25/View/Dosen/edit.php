<h2>Edit Dosen</h2>

<form method="POST" action="index.php?page=dosen&action=edit&id=<?= $dosen['id_dosen'] ?>">
    <div class="card p-3">

        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $dosen['nama'] ?>" class="form-control" required>

        <label class="mt-3">NIDN:</label>
        <input type="text" name="nidn" value="<?= $dosen['nidn'] ?>" class="form-control" required>

        <label class="mt-3">Phone:</label>
        <input type="text" name="phone" value="<?= $dosen['phone'] ?>" class="form-control" required>

        <label class="mt-3">Join Date:</label>
        <input type="date" name="join_date" value="<?= $dosen['join_date'] ?>" class="form-control" required>

        <button class="btn btn-primary mt-3" type="submit">Update</button>
        <a href="index.php?page=dosen&action=index" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</form>