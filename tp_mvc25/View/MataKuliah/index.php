<h2>Mata Kuliah</h2>

<a href="index.php?page=matakuliah&action=create" class="btn btn-primary mb-3">
    Tambah Mata Kuliah
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>SKS</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($matakuliah as $m) : ?>
            <tr>
                <td><?= $m['id_matakuliah'] ?></td>
                <td><?= $m['nama_matakuliah'] ?></td>
                <td><?= $m['jumlah_sks'] ?></td>
                <td>
                    <a class="btn btn-success" 
                       href="index.php?page=matakuliah&action=edit&id=<?= $m['id_matakuliah'] ?>">Edit</a>

                    <a class="btn btn-danger" 
                       href="index.php?page=matakuliah&action=delete&id=<?= $m['id_matakuliah'] ?>"
                       onclick="return confirm('Hapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>