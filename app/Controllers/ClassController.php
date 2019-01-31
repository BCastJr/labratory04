<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use classes;
use CodeIgniter\API\ResponseTrait;
class ClassController extends Controller {
    use ResponseTrait;
    public function index() {
        $model = new classes();
        $classes = $model->findAll();
        return $this->respond($students, 200, 'yeet');
    }
    public function show($id) {
        $model = new classes;
        $student = $model->find($id);
        return $this->respond($student, 200, 'student found');
    }
}
?>