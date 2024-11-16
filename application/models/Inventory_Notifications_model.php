<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_Notifications_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fetch pending requisitions for approval
    public function getPendingRequisitions() {
        $this->db->select('*');
        $this->db->from('requisitions');
        $this->db->where('status', 'pending');
        $query = $this->db->get();

        return $query->result_array();
    }

    // Fetch toolkits not reported at EOD or with missing items
    public function getToolkitStatus() {
        $this->db->select('t.toolkit_id, t.technician_name, COUNT(i.id) as missing_items');
        $this->db->from('toolkits t');
        $this->db->join('inventory_items i', 't.toolkit_id = i.toolkit_id AND i.reported = 0', 'left');
        $this->db->where('DATE(t.last_reported_at) != CURDATE()'); // Not reported today
        $this->db->group_by('t.toolkit_id');
        $query = $this->db->get();

        return $query->result_array();
    }

    // Fetch borrowed tools or materials overdue
    public function getReturnAlerts() {
        $this->db->select('*');
        $this->db->from('borrowed_items');
        $this->db->where('due_date <', date('Y-m-d'));
        $query = $this->db->get();

        return $query->result_array();
    }
}
