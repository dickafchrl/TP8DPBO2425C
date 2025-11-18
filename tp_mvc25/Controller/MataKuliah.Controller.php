<?php
require_once 'controller/Base.Controller.php';
require_once 'model/MataKuliah.Class.php';

class MataKuliahController extends BaseController {
    private $model;

    public function __construct() {
        $this->model = new MataKuliah();
    }

    public function handleRequest($action) {
        switch ($action) {
            case 'index':
                $this->index();
                break;
            case 'create':
                $this->create();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'delete':
                $this->delete();
                break;
        }
    }

    public function index() {
        $result = $this->model->getMataKuliah();
        $matakuliah = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $matakuliah[] = $row;
        }

        $this->render('matakuliah/index', ['matakuliah' => $matakuliah]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->addMataKuliah($_POST);
            $this->redirect('index.php?page=matakuliah&action=index');
        }
        $this->render('matakuliah/create');
    }

    public function edit() {
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc($this->model->getMataKuliahById($id));

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST['id'] = $id;
            $this->model->updateMataKuliah($_POST);
            $this->redirect('index.php?page=matakuliah&action=index');
        }

        $this->render('matakuliah/edit', ['matakuliah' => $data]);
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->deleteMataKuliah($id);
        $this->redirect('index.php?page=matakuliah&action=index');
    }
}
?>