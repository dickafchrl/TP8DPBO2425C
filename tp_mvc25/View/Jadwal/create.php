<h2>Tambah Jadwal</h2>

<form method="POST" action="index.php?page=jadwal&action=create">
    <div class="card p-3">

        <label>Dosen:</label>
        <input type="text" name="id_dosen" class="form-control" required>
        
        <label>Mata Kuliah:</label>
        <input type="text" name="id_matakuliah" class="form-control" required>

        <label class="mt-3">Hari:</label>
        <input type="text" name="hari" class="form-control" required>

        <label class="mt-3">Jam Mulai:</label>
        <input type="time" name="jam_mulai" class="form-control" required>
        
        <label class="mt-3">Jam Selesai:</label>
        <input type="time" name="jam_selesai" class="form-control" required>

        <label class="mt-3">Ruangan:</label>
        <input type="text" name="ruang" class="form-control" required>

        <button class="btn btn-success mt-3" type="submit">Simpan</button>
        <a href="index.php?page=jadwal&action=index" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</form>

<td><?= $j['id_jadwal'] ?></td>
                <td><?= $j['id_dosen'] ?></td>
                <td><?= $j['id_matakuliah'] ?></td>
                <td><?= $j['hari'] ?></td>
                <td><?= $j['jam_mulai'] ?></td>
                <td><?= $j['jam_selesai'] ?></td>
                <td><?= $j['ruang'] ?></td>