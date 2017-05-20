<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_mutasi extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_mutasi');
    }


    public function index(){
    	$data['data'] = $this->M_mutasi->select_data_mutasi();
    	$this->produsen_view('V_mutasi',$data);
    }
}
?>