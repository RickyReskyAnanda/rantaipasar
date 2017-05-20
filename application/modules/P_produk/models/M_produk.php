<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function select_data_produk(){
    	// $id_akun = $this->session->userdata('id_akun');
    	$id_akun = '1';
    	$this->db->where('id_akun',$id_akun);
    	echo json_encode($this->db->get('tabel_produk')->result_array());
    }

    public function select_data_edit_produk(){
    	$id_produk = $this->uri->segment(4);
    	$this->db->where('id_produk',$id_produk);
    	return $this->db->get('tabel_produk')->result_array();
    }

    public function insert_data_produk(){
    	$data = array();

    	$nama_gambar='';
        if($_FILES['gambar_dp']['name']){
            $nmfile = "produk_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'admin/img/produk'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar_dp');
            $gbr   = $this->upload->data();
            $data['foto'] = $gbr['file_name'];
            
            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '400';
            $config['height']           = '400';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }

    	$data['nama_produk'] 	= $this->input->post('nama_produk');
    	$data['stok']			= $this->input->post('stok');
    	$data['harga']			= $this->input->post('harga');
    	$data['id_akun']		= $this->input->post('id_akun');

    	if($this->db->insert('tabel_produk')){
    		$this->session->set_flashdata('pesanInput', 'Data produk berhasil diinput !');
    		redirect('produsen/produk');
    	}else{
    		$this->session->set_flashdata('pesanInput', 'Data produk gagal diinput !');
    		redirect('produsen/produk');
    	}
    }
}
?>