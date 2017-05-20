<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_logged_in extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cek_data_login(){
        $email  = $this->input->post('email');
        $pass   = $this->input->post('password');

        $this->db->where('email',$email);
        $this->db->where('password',md5(md5($pass).'rantaipasar').md5($pass));
        $data=$this->db->get('tabel_akun');

        $newdata=array();
        if ($data->num_rows() > 0) {
            
            $row = $data->row_array();
            if($row['email']==$email){ 
                    
                    $newdata['nama_pj']     = $row['nama_pj'];
                    $newdata['nama_usaha']  = $row['nama_usaha'];
                    $newdata['alamat_usaha']  = $row['alamat_usaha'];
                    $newdata['email']       = $row['email'];//no_hp
                    $newdata['id_akun']     = $row['id_akun'];
                    $newdata['role']        = $row['role'];
                    $newdata['foto_profil'] = $row['foto_profil'];
                    $newdata['logged_in']   = "rantaipasar".ucfirst($newdata['role']);

                    $this->session->set_userdata($newdata);
                    redirect($newdata['role']);
            }else{
                $this->session->set_flashdata('pesan', 'Email atau Password salah !');
                redirect('','refresh');
            }
        }else{
            $this->session->set_flashdata('pesan', 'Email atau Password salah !');
            redirect('','refresh');   
        }
    }

    public function insert_data_pendaftaran(){
        $pass =$this->input->post('password');
        $data['nama_pj']    = $this->input->post('nama_pj');
        $data['nama_usaha'] = $this->input->post('nama_usaha');
        $data['email']      = $this->input->post('email');
        $data['password']   = md5(md5($pass).'rantaipasar').md5($pass);
        $data['role']       = $this->input->post('role');
        $data['alamat_usaha']   = '-';
        $data['jenis_usaha']    = '-';
        $data['foto_profil']    = 'user.ico';
        $data['no_kontak']      = '-';
        $data['rekening']       = '-';

        $this->db->insert('tabel_akun',$data);

        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        $data2 = $this->db->get('tabel_akun')->row_array();

        $newdata['nama_pj']         = $data2['nama_pj'];
        $newdata['nama_usaha']      = $data2['nama_usaha'];
        $newdata['alamat_usaha']    = $data2['alamat_usaha'];
        $newdata['email']           = $data2['email'];//no_hp
        $newdata['id_akun']         = $data2['id_akun'];
        $newdata['role']            = $data2['role'];
        $newdata['foto_profil']     = $data2['foto_profil'];
        $newdata['logged_in']       = "rantaipasar".ucfirst($newdata['role']);

        $this->session->set_userdata($newdata);
        redirect($newdata['role']);
    }
}
?>