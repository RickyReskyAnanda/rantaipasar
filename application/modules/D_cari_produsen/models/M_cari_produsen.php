<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cari_produsen extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pencarian_produsen(){
        $pencarian = $this->input->post('pencarian');

        $this->db->like('nama_usaha',$pencarian);
        $this->db->or_like('jenis_usaha',$pencarian);
        $this->db->where('role','produsen');
        return $this->db->get('tabel_akun')->result_array();
    }
}
?>