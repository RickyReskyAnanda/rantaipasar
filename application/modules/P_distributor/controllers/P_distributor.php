<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_distributor extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    }
   
    public function index(){
        $this->produsen_view('V_distributor');
    }
}
?>