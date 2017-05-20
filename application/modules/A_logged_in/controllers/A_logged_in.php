<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_logged_in extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
   
    public function index(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in=='rantaipasarProdusen'){
            redirect('produsen');
        }elseif($logged_in=='rantaipasarDistributor'){
            redirect('distributor');
        }else{
            $this->load->view('V_login');
        }
    }    
    public function cek_logged_in(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in=='rantaipasarProdusen'){
            redirect('produsen');
        }elseif($logged_in=='rantaipasarDistributor'){
            redirect('distributor');
        }else{
            $this->load->model('M_logged_in');
            $this->M_logged_in->cek_data_login();
        }
    }
    public function user_log_out(){
        $newdata = array('nama','posisi','email','id_akun','role','logged_in');
        $this->session->unset_userdata($newdata);
        redirect();
    }

    public function proses_pendaftaran(){
        $data['nama_pj']    = $this->input->post('nama');
        $data['nama_usaha'] = $this->input->post('nama_usaha');
        $data['email']      = $this->input->post('email');
        $data['password']   = $this->input->post('password');
        $data['password']   = $this->input->post('password');
        $data['password']   = $this->input->post('password');
        $data['password']   = $this->input->post('password');
        $data['password']   = $this->input->post('password');

        $this->db->insert('')
    }

}
?>