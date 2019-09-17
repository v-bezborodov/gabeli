<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bibin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
//        redirect('https://www.linkedin.com/in/s%C5%82awek-bezborodov/','location');
        $param1 = $this->uri->segment(1);
        print_r($param1);
    }
}
