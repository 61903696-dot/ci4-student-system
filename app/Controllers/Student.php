<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class Student extends Controller
{
    // Show all students
    public function index()
    {
        $model = new StudentModel();
        $data['students'] = $model->findAll();
        return view('student_view', $data);
    }

    // Add new student
    public function store()
    {
        $model = new StudentModel();
        $data = [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ];
        $model->save($data);
        return redirect()->to(base_url('student'));
    }

    // Delete student
    public function delete($id = null)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to(base_url('student'));
    }
}