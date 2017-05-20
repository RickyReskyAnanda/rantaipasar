<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produsen extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_produsen(){
        $this->db->join('tabel_akun', 'tabel_akun.id_akun = tabel_relasi.id_produsen');
        $this->db->where('id_distributor', $this->session->userdata('id_akun'));
        $this->db->where('status_relasi','diterima');
        return $this->db->get('tabel_relasi')->result_array();
    }
}
?>