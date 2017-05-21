<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_notifikasi extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_notifikasi');
    }

    public function index(){
    	$data['data'] = $this->M_notifikasi->select_data_invoice();
        $this->distributor_view('V_invoice',$data);
    }   
    public function select_data_detail_invoice(){
    	$data['data'] = $this->M_notifikasi->select_data_detail_invoice();
    	$this->load->view('V_isi_invoice',$data);
    }   
    public function view_tagihan(){
        $this->distributor_view('V_tagihan');
    }      

    public function update_data_invoice(){
    	$this->M_notifikasi->update_data_invoice();
    }
    
}
?>