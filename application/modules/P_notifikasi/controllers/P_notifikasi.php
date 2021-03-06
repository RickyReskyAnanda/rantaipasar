<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_notifikasi extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_notifikasi');
    }

    public function view_pemesanan(){
    	$this->produsen_view('V_pemesanan');
    }
        public function select_data_pemesanan(){
            $data['data']=$this->M_notifikasi->select_data_pemesanan();
            // print_r($data);die;
            $this->load->view('V_daftar_pemesanan',$data);
        }
        public function select_detail_data_pemesanan(){
            $data['data']=$this->M_notifikasi->select_detail_data_pemesanan();
            // print_r($data);die;
            $this->load->view('V_detail_pemesanan',$data);
        }
        public function update_status_data_pemesanan(){
            $this->M_notifikasi->update_status_data_pemesanan();
        }
    public function view_permintaan(){
        $this->produsen_view('V_permintaan');
    }
        public function select_data_permintaan(){
            $data['data']=$this->M_notifikasi->select_data_permintaan();
            $this->load->view('V_daftar_permintaan',$data);
        }
        public function update_status_data_permintaan(){
            $this->M_notifikasi->update_status_data_permintaan();
        }

   
   
}
?>