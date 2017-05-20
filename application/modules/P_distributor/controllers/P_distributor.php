<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_distributor extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_distributor');
    }
   
    public function index(){
        $this->produsen_view('V_distributor');
    }

    	public function select_data_distributor(){
    		$data['data'] = $this->M_distributor->select_data_distributor();
            $this->load->view('V_daftar_distributor',$data);
    	}
    	public function update_status_data_distributor(){
    		$this->M_distributor->update_status_data_distributor();

    	}
}
?>