<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        // $this->cek_session('M_akun');
        
    }

    public function index(){
        $this->produsen_view('V_beranda');
    } 
    public function view_profil(){
        $this->produsen_view('V_profil');
    } 
    public function view_faq(){
        $this->produsen_view('V_faq');
    }      
}
?>