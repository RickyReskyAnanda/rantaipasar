<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_notifikasi extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_notifikasi');
    }

    public function view_pemesanan(){
    	$this->produsen_view('V_pemesanan');
    }
        public function select_data_pemesanan(){
            $data['data']=$this->M_notifikasi->select_data_pemesanan();
            $this->load->view('V_daftar_pemesanan',$data);
        }
        public function update_status_data_pemesanan(){
            $this->M_notifikasi->update_status_data_pemesanan();
        }
    public function view_permintaan(){
        $this->produsen_view('V_permintaan');
    }
        public function select_data_permintaan(){
            $this->M_notifikasi->select_data_permintaan();
        }
        public function update_status_data_permintaan(){
            $this->M_notifikasi->update_status_data_permintaan();
        }

   
   
}
?>