<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_beranda');
    }

    public function index(){
        $this->distributor_view('V_beranda');
    }
    public function view_profil(){
        $this->distributor_view('V_profil');
    }      
}
?>