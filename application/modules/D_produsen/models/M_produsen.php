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
    public function select_daftar_data_produk(){
        $this->db->where('id_produsen', $this->uri->segment(4));
        return $this->db->get('tabel_produk')->result_array();
    }

    public function insert_data_pemesanan(){
        $maks = max(array_keys($_POST));
        $data = $_POST;
        $invoice=0;
        for ($i=0; $i <= $maks; $i++) { 
            if(isset($data[$i])){
                $this->db->where('id_produk',$i);
                $produk = $this->db->get('tabel_produk')->row_array();

                if($invoice==0){
                    $isi2['no_invoice']= parse_str($i*3)."/PRO/ads/";
                    $isi2['id_distributor']=$this->session->userdata('id_akun');
                    $isi2['tgl_invoice']=date('Y-m-d');
                    $isi2['id_produsen']=$produk['id_produsen'];
                    $isi2['persetujuan']='menunggu';
                    $this->db->insert('tabel_invoice',$isi2);
                    $invoice++;
                    $this->db->order_by('id_invoice','desc');
                    $this->db->limit(1);
                    $this->db->where('id_produsen',$produk['id_produsen']);
                    $this->db->where('persetujuan','menunggu');
                    $isi3 = $this->db->get('tabel_invoice')->row_array();
                    $invoice = $isi3['id_invoice'];
                }

                $isi['id_produk'] = $produk['id_produk'];
                $isi['sub_total'] = $data[$i]*$produk['harga'];
                $isi['jumlah_order'] = $data[$i];
                $isi['id_distributor'] = $this->session->userdata('id_akun');;
                $isi['id_produsen'] = $produk['id_produsen'];
                $isi['id_invoice'] = $invoice;

                $this->db->insert('tabel_order',$isi);
            }
        }
    }
}
?>