<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends Admin_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_vendor($data) {
        return $this->db->insert('vendors', $data);
    }
}
?>
