<?php


class Student_model extends CI_Model
{

    public function index(){
        return $this->db->get('students')->result_array();
    }

    public function store($student){
        $this->db->insert('students', $student);
    }

    public function show($student_id){
        return $this->db->get_where('students',['student_id'=>$student_id])->row_array();
    }

    public function update($student_id, $student){
        $this->db->where('student_id',$student_id);
        return $this->db->update('students',$student);
    }

    public function destroy($student_id){
        $this->db->where('student_id',$student_id);
        return $this->db->delete('students');
        
    }
}
