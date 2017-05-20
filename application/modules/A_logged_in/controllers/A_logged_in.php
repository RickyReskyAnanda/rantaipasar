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
        $newdata = array('nama_pj','nama_usaha','alamat_usaha','email','id_akun','role','foto_profil','logged_in');
        $this->session->unset_userdata($newdata);
        redirect();
    }

    public function proses_pendaftaran(){
        $this->load->model('M_logged_in');
        $this->M_logged_in->insert_data_pendaftaran();
    }

}
?>