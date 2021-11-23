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
        $this->load->view('pages/students/view_student');
        $this->load->view('pages/API/show_student');
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js.php', $data);
	}

    public function new()
    {
        $data['title'] = 'Alunos - CRUD Alunos';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/students/form_students', $data);
		$this->load->view('templates/footer', $data);
        $this->load->view('pages/API/cep.php', $data);
		$this->load->view('templates/js.php', $data); 

    }

    public function show($student_id){
        $this->load->model('student_model');
        $data = $this->student_model->show($student_id);
        echo json_encode($data);
    }

    public function store()
    {
        $student = $_POST;

        $cpf          = 1;
        $curriculo    = $_FILES['photo'];
        $configuracao = array(
        'upload_path'   => './curriculos/',
        'allowed_types' => 'jog',
        'file_name'     => $cpf.'.jpg',
        'max_size'      => '500'
        );
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('curriculo'))
          echo 'Arquivo salvo com sucesso.';
         else
         echo $this->upload->display_errors();

        $config['image_library'] = 'gd2';
        $config['source_image'] = '/path/to/image/mypic.jpg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();

    
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
		$this->load->view('pages/students/form_students', $data);
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