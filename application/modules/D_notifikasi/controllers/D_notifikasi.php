<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_notifikasi extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_notifikasi');
    }

    public function index(){
        $this->distributor_view('V_notifikasi');
    }      
    public function view_tagihan(){
        $this->distributor_view('V_tagihan');
    }      
    
}
?>