<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('Lowongan_Model');
        //cek session dan level user
        if($this->admin->is_role() != "siswa"){
            redirect("login/");
        }
    }

    public function index()
    {
        $data['lowongan'] = $this->Lowongan_Model->get_lowongan();
        $this->load->view("siswa/loker",  $data);            

    }

    public function detail($id_lowongan) {
        $data['lowongan'] = $this->db->get_where('lowongan', array('id_lowongan' => $id_lowongan))->row();
        $this->load->view('siswa/loker_detail', $data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

}