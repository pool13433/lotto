<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Module extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('datacore');
    }

    public function lotto() {
        $data['week'] = $this->datacore->week();
        $this->load->view('/include/layout_header');
        $this->load->view('module_lotto', $data);
        $this->load->view('/include/layout_footer');
    }

    public function graphLife() {
        $data['week'] = $this->datacore->week();
        $data['month'] = $this->datacore->month();
        $data['chineseYear'] = $this->datacore->chineseYear();
        $this->load->view('/include/layout_header');
        $this->load->view('module_graphlife',$data);
        $this->load->view('/include/layout_footer');
    }

}
