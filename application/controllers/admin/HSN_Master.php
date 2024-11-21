<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HSN_Master extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogin();
        // $this->load->model('HSN_Master_Model'); // Load model for database interaction
    }

    // Load the HSN Master form
    public function index() {
        $this->loadViews('hsn_master/hsn');
    }
}


