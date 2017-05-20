<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mutasi extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_mutasi(){
    	$id_produsen = '1';
    	
        $this->db->join('tabel_invoice', 'tabel_invoice.id_invoice = tabel_mutasi.id_invoice');
    	$this->db->order_by('id_mutasi','desc');
    	$this->db->where('tabel_mutasi.id_produsen',$id_produsen);
    	$data =  $this->db->get('tabel_mutasi')->result_array();

    	for ($i=0; $i < count($data); $i++) { 
    		$this->db->select_sum('sub_total');
    		$this->db->where('id_invoice',$data[$i]['id_invoice']);
    		$data[$i]['mutasi'] = $this->db->get('tabel_order')->row_array();
    		$data[$i]['mutasi'] = $data[$i]['mutasi']['sub_total'];
    	}

    	return $data;
    }

    
}
?>