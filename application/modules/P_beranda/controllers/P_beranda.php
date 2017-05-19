<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_akun');
        
    }

    public function index(){
        $this->admin_view('V_akun');
    }      
}
?>