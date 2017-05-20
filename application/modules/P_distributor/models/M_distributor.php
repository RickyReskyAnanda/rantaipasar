<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_distributor extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_distributor(){
        $id_produsen = $this->session->userdata('id_akun');
        $this->db->join('tabel_akun', 'tabel_akun.id_akun = tabel_relasi.id_distributor');
        $this->db->where('status_relasi','diterima');
        $this->db->where('id_produsen',$id_produsen);
        return $this->db->get('tabel_relasi')->result_array();
    }
    public function update_status_data_distributor(){
        $id_relasi = $this->input->post('id');
        $data['status_relasi'] = $this->input->post('status');
        $this->db->where('id_relasi',$id_relasi);
        if($this->db->update('tabel_relasi',$data)){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    }

    
}
?>