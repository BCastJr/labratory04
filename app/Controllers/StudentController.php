<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controllers;
use App\Models\Classes;

class StudentContoller extends Controller{
    public function show($id){
        $model = new students;
        $student = $model->find($id);
        return $this->respond($student, 200, 'Object found(Student)');
    }

    public function index(){
        $model = new students;
        $student = $model->findall();
        return $this->respond($student, 200, 'Object found(Student)');
    }

    public function new(){
        $this -> fail(["Not used"],418);
    }
}

