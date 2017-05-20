<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_produk extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    }
   
    public function index(){
        $this->produsen_view('V_produk');
    }
    public function view_detail_produk(){
        $this->produsen_view('V_detail_produk');
    }
    public function view_tambah_produk(){
        $this->produsen_view('V_tambah_produk');
    }
    public function view_edit_produk(){
        $this->produsen_view('V_edit_produk');
    }

}
?>