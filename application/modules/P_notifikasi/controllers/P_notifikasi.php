<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_notifikasi extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
    	$this->produsen_view('V_mailbox');
    }
    public function view_notifikasi(){
    	$this->produsen_view('V_mailbox');
    }
   
   
}
?>