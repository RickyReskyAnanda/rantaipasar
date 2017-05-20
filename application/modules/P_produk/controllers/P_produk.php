<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_produk extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
    }
   
    public function index(){
        $this->produsen_view('V_produk');
    }
    public function view_tambah_produk(){
        $this->produsen_view('V_tambah_produk');
    }
    public function view_edit_produk(){
        $data['data']=$this->M_produk->select_data_edit_produk();
        $this->produsen_view('V_edit_produk',$data);
    }

        public function select_data_produk(){
            $data['data'] = $this->M_produk->select_data_produk();
            $this->load->view('V_daftar_produk',$data);
        }
        
        public function insert_data_produk(){
            $this->M_produk->insert_data_produk();
        }
        public function update_data_produk(){
            $this->M_produk->update_data_produk();
        }
        public function delete_data_produk(){
            $this->M_produk->delete_data_produk();
        }

}
?>