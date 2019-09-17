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
        $param = $this->uri->segment(1);
    if($param) {
        if (preg_match('/(linkedin)/i', $param)) {
            redirect('https://www.linkedin.com/in/s%C5%82awek-bezborodov/', 'location');
        }
        if (preg_match('/(fb)|(facebook)|(fcbk)/i', $param)) {
            redirect('https://www.facebook.com/po.postman', 'location');
        }
        if (preg_match('/(git)(github)/', $param)) {
            redirect('https://github.com/wenceslawus', 'location');
        }
        print_r('Undefined comand <b>' . $param . '</b>');
    }
    }
}
