<?php
class Technician_model extends CI_Model {
    public function get_all_technicians() {
        return $this->db->get('technicians')->result();
    }
}
?>
