<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_notifikasi extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_invoice(){
    	$this->db->order_by('id_invoice','desc');
    	$this->db->join('tabel_akun', 'tabel_akun.id_akun = tabel_invoice.id_produsen');
        $this->db->where('id_distributor',$this->session->userdata('id_akun'));
        $this->db->where('persetujuan','diterima');
        $this->db->where('pembayaran','menunggu');
        $data = $this->db->get('tabel_invoice')->result_array();

        for ($i=0; $i < count($data); $i++) { 
        	$this->db->select_sum('sub_total');
        	$this->db->where('id_invoice',$data[$i]['id_invoice']);
        	$data[$i]['total_bayar'] = $this->db->get('tabel_order')->row_array();
        }
        return $data;
    }

    public function select_data_detail_invoice(){
    	$id = $this->input->post('id_invoice');
    	$this->db->join('tabel_akun', 'tabel_akun.id_akun = tabel_invoice.id_produsen');
    	$this->db->where('tabel_invoice.id_invoice', $id);
    	$data = $this->db->get('tabel_invoice')->row_array();

    	$this->db->join('tabel_produk', 'tabel_produk.id_produk = tabel_order.id_produk');
    	$this->db->where('id_invoice',$id);
    	$data['order'] = $this->db->get('tabel_order')->result_array();

    	return $data;
    }

    public function update_data_invoice(){
    	$id_invoice = $this->uri->segment(3);
    	$pembayaran = $this->uri->segment(4);

    	$this->db->where('id_invoice', $id_invoice);
    	$this->db->get('tabel_invoice');
    	if($pembayaran == 'tunai'){


    		$data['id_invoice'] = $id_invoice;
    		$data['waktu'] = date('Y-m-d');
    		$this->db->insert('tabel_mutasi',$data);
    	}
    }


}
?>