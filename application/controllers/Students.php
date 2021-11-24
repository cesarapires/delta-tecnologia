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

        if(! empty($_FILES['photo_student']['name'])){

            $name_file = bin2hex(random_bytes(16));
        
            $config['file_name']            = $name_file.'.jpg';
            $config['upload_path']          = './public/students/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
        
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('photo_student'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('upload_form', $error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $student['photo_id'] = $name_file;
            }
        }
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

        if(! empty($_FILES['photo_student']['name'])){
           
            $data['student'] = $this->student_model->show($student_id);
            $last_photo = $data['student']['photo_id'];
            if(! empty($last_photo)){
                $url = 'public/students/'.$last_photo.'.jpg';
                $this->load->helper("file");
                if(! unlink($url)){
                    echo 'errors occured';
                    exit();
                }
            }
            
            $name_file = bin2hex(random_bytes(16));
            $config['file_name']            = $name_file.'.jpg';
            $config['upload_path']          = './public/students/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('photo_student'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $student['photo_id'] = $name_file;
            }
        }
        
        $this->student_model->update($student_id,$student);
        redirect('students');
    }        


    public function delete($student_id){
        $this->load->model('student_model');
        $data['student'] = $this->student_model->show($student_id);
        $last_photo = $data['student']['photo_id'];
        if(! empty($last_photo)){
            $url = 'public/students/'.$last_photo.'.jpg';
            $this->load->helper("file");
            if(! unlink($url)){
                echo 'errors occured';
                exit();
            }
        }
        $this->student_model->destroy($student_id);
        redirect('students');
    }
}