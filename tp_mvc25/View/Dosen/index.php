<h2>Daftar Dosen</h2>

<a href="index.php?page=dosen&action=create" class="btn btn-primary mb-3">
    Tambah Dosen
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Phone</th>
            <th>Join Date</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($dosen as $d) : ?>
            <tr>
                <td><?= $d['id_dosen'] ?></td>
                <td><?= $d['nama'] ?></td>
                <td><?= $d['nidn'] ?></td>
                <td><?= $d['phone'] ?></td>
                <td><?= $d['join_date'] ?></td>
                <td>
                    <a class="btn btn-success" 
                       href="index.php?page=dosen&action=edit&id=<?= $d['id_dosen'] ?>">Edit</a>

                    <a class="btn btn-danger" 
                       href="index.php?page=dosen&action=delete&id=<?= $d['id_dosen'] ?>"
                       onclick="return confirm('Hapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>