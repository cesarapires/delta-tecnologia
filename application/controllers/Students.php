<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index()
	{
		$this->load->model('student_model');
		$data['students'] = $this->student_model->index();
		$data['title'] = 'Alunos - CRUD Alunos';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/students', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js.php', $data);
	}

    public function new()
    {
        $data['title'] = 'Alunos - CRUD Alunos';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/students/form-students', $data);
		$this->load->view('templates/footer', $data);
        $this->load->view('pages/API/cep.php', $data);
		$this->load->view('templates/js.php', $data); 

    }

    public function store()
    {
        $student = $_POST;
        $this->load->model('student_model');
        $this->student_model->store($student);
        redirect('students');
    }

    public function edit($student_id)
    {
        $this->load->model('student_model');
        $data['student'] = $this->student_model->show($student_id);
		$data['title'] = 'Editar Alunos - CRUD Alunos';
        
        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/students/form-students', $data);
		$this->load->view('templates/footer', $data);
        $this->load->view('pages/API/cep.php', $data);
		$this->load->view('templates/js.php', $data); 
    }

    public function update($student_id){
        $this->load->model('student_model');
        $student = $_POST;
        $this->student_model->update($student_id,$student);
        redirect('students');
    }

    public function delete($student_id){
        $this->load->model('student_model');
        $this->student_model->destroy($student_id);
        redirect('students');
    }
}