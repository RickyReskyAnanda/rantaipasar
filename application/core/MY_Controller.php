<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    public function home_view($page_isi,$data){
        $this->load->view('H_beranda/V_header',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('H_beranda/V_footer');
    }
    public function distributor_view($page_isi,$data=array()){
        $this->load->view('D_beranda/V_header',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('D_beranda/V_footer');
    }
    public function produsen_view($page_isi,$data=array()){
        $this->load->view('P_beranda/V_header',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('P_beranda/V_footer');
    }

    //redirect login
    public function cek_session($modelnya){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "rantaipasarDistributor") {
            $this->load->model($modelnya);
        }elseif($logged_in == "rantaipasarProdusen") {
            $this->load->model($modelnya);
        }else{
            $this->session->set_flashdata('pesan', 'Silahkan Login Kembali !');
            redirect('','refresh');
        } 
    }
}


?>