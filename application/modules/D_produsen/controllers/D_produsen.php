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
    
}
?>