<?php
require_once 'controller/Base.Controller.php';
require_once 'model/Jadwal.Class.php';

class JadwalController extends BaseController {
    private $model;

    public function __construct() {
        $this->model = new Jadwal();
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
        $result = $this->model->getJadwal();
        $jadwal = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $jadwal[] = $row;
        }

        $this->render('jadwal/index', ['jadwal' => $jadwal]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->addJadwal($_POST);
            $this->redirect('index.php?page=jadwal&action=index');
        }
        $this->render('jadwal/create');
    }

    public function edit() {
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc($this->model->getJadwalById($id));

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST['id'] = $id;
            $this->model->updateJadwal($_POST);
            $this->redirect('index.php?page=jadwal&action=index');
        }

        $this->render('jadwal/edit', ['jadwal' => $data]);
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->deleteJadwal($id);
        $this->redirect('index.php?page=jadwal&action=index');
    }
}
?>
