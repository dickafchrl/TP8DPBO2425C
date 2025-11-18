<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($page == 'dosen') {
    include_once("controller/Dosen.controller.php");
    $controller = new DosenController();
    $controller->handleRequest($action);
} else if ($page == 'matakuliah') {
    include_once("controller/MataKuliah.controller.php");
    $controller = new MataKuliahController();
    $controller->handleRequest($action);
} else if ($page == 'jadwal') {
    include_once "controller/Jadwal.controller.php";
    $controller = new JadwalController();
    $controller->handleRequest($action);
} else if ($page == 'home') {
    include_once("view/Home.view.php");
    $view = new HomeView();
    $view->renderHome();
}
?>