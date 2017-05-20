<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pemesanan(){
        $id_invoice = '1';
        $this->db->where('id_invoice', $id_invoice);
        return $this->db->get('tabel_invoice')->result_array();
    }
    public function update_status_data_pemesanan(){

        $id_invoice = $this->input->post('id');
        $data['persetujuan'] = $this->input->post('persetujuan');
        $this->db->where('id_invoice', $id_invoice);
        if($this->db->update('tabel_invoice',$data)){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    }
    public function select_data_permintaan(){
        $id_produsen = '1';
        $this->db->where('id_produsen',$id_produsen);
        return $this->db->get('tabel_relasi')->result_array();
    }
    public function update_status_data_permintaan(){
        $this->db->where('id_relasi',$id_relasi);
        if($this->db->update('tabel_relasi',$data)){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    }
}
?>