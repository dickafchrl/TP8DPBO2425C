<h2>Jadwal</h2>

<a href="index.php?page=jadwal&action=create" class="btn btn-primary mb-3">
    Tambah Jadwal
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Dosen</th>
            <th>Mata kuliah</th>
            <th>hari</th>
            <th>Jam Dimulai</th>
            <th>Jam Selesai</th>
            <th>Ruangan</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($jadwal as $j) : ?>
            <tr>
                <td><?= $j['id_jadwal'] ?></td>
                <td><?= $j['id_dosen'] ?></td>
                <td><?= $j['id_matakuliah'] ?></td>
                <td><?= $j['hari'] ?></td>
                <td><?= $j['jam_mulai'] ?></td>
                <td><?= $j['jam_selesai'] ?></td>
                <td><?= $j['ruang'] ?></td>
                <td>
                    <a class="btn btn-success" 
                       href="index.php?page=jadwal&action=edit&id=<?= $j['id_jadwal'] ?>">Edit</a>

                    <a class="btn btn-danger" 
                       href="index.php?page=jadwal&action=delete&id=<?= $j['id_jadwal'] ?>"
                       onclick="return confirm('Hapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>