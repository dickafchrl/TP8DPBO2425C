<?php
require_once 'controller/Base.Controller.php';
require_once 'model/Dosen.Class.php';

class DosenController extends BaseController {
    private $model;

    public function __construct() {
        $this->model = new Dosen();
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
        $result = $this->model->getDosen();
        $dosen = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $dosen[] = $row;
        }

        $this->render('dosen/index', ['dosen' => $dosen]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->addDosen($_POST);
            $this->redirect('index.php?page=dosen&action=index');
        }
        $this->render('dosen/create');
    }

    public function edit() {
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc($this->model->getDosenById($id));

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST['id'] = $id;
            $this->model->updateDosen($_POST);
            $this->redirect('index.php?page=dosen&action=index');
        }

        $this->render('dosen/edit', ['dosen' => $data]);
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->deleteDosen($id);
        $this->redirect('index.php?page=dosen&action=index');
    }
}
?>
