<h2>Edit Jadwal</h2>

<form method="POST" action="index.php?page=jadwal&action=edit&id=<?= $jadwal['id_jadwal'] ?>">
    <div class="card p-3">

        <label>Dosen:</label>
        <input type="text" name="id_dosen" value="<?= $jadwal['id_dosen'] ?>" class="form-control" required>
        
        <label>Mata Kuliah:</label>
        <input type="text" name="id_matakuliah" value="<?= $jadwal['id_matakuliah'] ?>" class="form-control" required>

        <label class="mt-3">Hari:</label>
        <input type="text" name="hari" value="<?= $jadwal['hari'] ?>" class="form-control" required>

        <label class="mt-3">Jam Mulai:</label>
        <input type="time" name="jam_mulai" value="<?= $jadwal['jam_mulai'] ?>" class="form-control" required>
        
        <label class="mt-3">Jam Selesai:</label>
        <input type="time" name="jam_selesai" value="<?= $jadwal['jam_selesai'] ?>" class="form-control" required>

        <label class="mt-3">Ruangan:</label>
        <input type="text" name="ruang" value="<?= $jadwal['ruang'] ?>" class="form-control" required>

        <button class="btn btn-primary mt-3" type="submit">Update</button>
        <a href="index.php?page=jadwal&action=index" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</form>