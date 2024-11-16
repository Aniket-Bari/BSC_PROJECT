<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation_model extends Admin_Model {

    public function insert_quotation($data) {
        return $this->db->insert('quotations', $data);
    }

}
?>
