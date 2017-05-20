<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_cari_produsen extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_cari_produsen');
    }

    public function index(){
        $this->distributor_view('V_cari_produsen');
    }      
    public function select_data_pencarian_produsen(){
    	$data['data']= $this->M_cari_produsen->select_data_pencarian_produsen();
    	$this->load->view('V_daftar_produsen',$data);
    }
}
?>