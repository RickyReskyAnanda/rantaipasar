<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_cari_distributor extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_cari_distributor');
    }
    
    public function index(){
        $this->admin_view('V_home');
    }    
    public function view_profil(){
        $this->admin_view('V_profil');
    }    
}
?>