<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_produsen extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_produsen');
    }

    public function index(){
    	$data['data']=$this->M_produsen->select_data_produsen();
        $this->distributor_view('V_produsen',$data);
    }
    public function view_daftar_produk(){
    	$data['data']=$this->M_produsen->select_daftar_data_produk();
        $this->distributor_view('V_daftar_produk',$data);
    }     
	    public function insert_data_pemesanan(){
	    	$this->M_produsen->insert_data_pemesanan();
	    } 
	public function view_invoice(){
		$this->distributor_view('V_invoice');
	}
    
}
?>