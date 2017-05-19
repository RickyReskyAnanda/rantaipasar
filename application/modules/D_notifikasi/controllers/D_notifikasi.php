<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_notifikasi extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_berita');
    }

    public function index(){
        $this->admin_view('V_berita');
    }      
    
}
?>