<?php


namespace App\Controllers;
use CodeIgniter\Controller;
use student;
use CodeIgniter\API\ResponseTrait;
class StudentController extends Controller {
    use ResponseTrait;
    public function index() {
        $model = new student();
        $students = $model->findAll();
        return $this->respond($students, 200, 'yeet');
    }
    public function show($id) {
        $model = new student;
        $student = $model->find($id);
        return $this->respond($student, 200, 'student found');
    }
}
?>