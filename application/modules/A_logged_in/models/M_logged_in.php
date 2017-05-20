<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_logged_in extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cek_data_login(){
        $email  = $this->input->post('eml');
        $pass   = $this->input->post('pwd');

        $this->db->where('email',$email);
        $this->db->where('password',md5(md5($pass).'rantaipasar').md5($pass));
        $data=$this->db->get('tabel_akun');
        $newdata=array();
        if ($data->num_rows() > 0) {
            
            $row = $data->row_array();
            if($row['email']==$email){ 
                    
                    $newdata['nama_pj']     = $row['nama_pj'];
                    $newdata['nama_usaha']  = $row['nama_usaha'];
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
}
?>