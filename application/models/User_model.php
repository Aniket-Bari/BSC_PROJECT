<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function save_user($data) {
        return $this->db->insert('users', $data);
    }
}
