<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_notifikasi extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();

    }

    public function select_data_pemesanan(){
        $persetujuan = $this->input->post('persetujuan');
        $id_produsen='1';
        $this->db->join('tabel_akun', 'tabel_akun.id_akun = tabel_invoice.id_distributor');
        $this->db->where('id_produsen', $id_produsen);
        $this->db->where('persetujuan', $persetujuan);
        return $this->db->get('tabel_invoice')->result_array();
    }
    public function select_detail_data_pemesanan(){
        $id = $this->input->post('id');
        $this->db->where('id_invoice', $id);
        $sementara =  $this->db->get('tabel_invoice')->row_array();

        $this->db->where('id_akun', $sementara['id_distributor']);
        $data=$this->db->get('tabel_akun')->row_array();

        $this->db->join('tabel_produk', 'tabel_produk.id_produk = tabel_order.id_produk');
        $this->db->where('id_invoice',$id);
        $data['daftar_barang'] = $this->db->get('tabel_order')->result_array();

        return $data;

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
        $id_produsen = $this->session->userdata('id_akun');
        $this->db->join('tabel_akun', 'tabel_akun.id_akun = tabel_relasi.id_distributor');
        $this->db->where('status_relasi','menunggu');
        $this->db->where('id_produsen',$id_produsen);
        return $this->db->get('tabel_relasi')->result_array();
    }
    public function update_status_data_permintaan(){
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