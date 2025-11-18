<?php
class HomeView {

    public function renderHome() {
        $title = "Homepage";
        $page = "home";
        ob_start();
        ?>
        <h2>Selamat Datang di SISTEM REKTOR ea!!</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Dosen</h5>
                        <p class="card-text">Kelola data dosen di sini.</p>
                        <a href="index.php?page=dosen" class="btn btn-primary">Lihat Dosen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Mata Kuliah</h5>
                        <p class="card-text">Kelola data mata kuliah.</p>
                        <a href="index.php?page=matakuliah" class="btn btn-primary">Lihat Mata Kuliah</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Kuliah</h5>
                        <p class="card-text">Kelola Jadwal Kuliah.</p>
                        <a href="index.php?page=jadwal" class="btn btn-primary">Lihat Jadwal</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $content = ob_get_clean();
        include "Template/Header.php";
        include "Template/Footer.php";
    }
}
?>