<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EOD_Inventory_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    /**
     * Save the EOD Inventory report to the database.
     * 
     * @param array $data The EOD Inventory data to save.
     * @return bool Whether the operation was successful.
     */
    public function saveReport($data) {
        return $this->db->insert('eod_inventory_reports', $data);
    }

    /**
     * Fetch all inventory items for a technician's toolkit.
     * 
     * @param string $toolkit_id The ID of the technician's toolkit.
     * @return array List of inventory items.
     */
    public function getInventoryItems($toolkit_id) {
        $this->db->select('item_name');
        $this->db->from('inventory_items');
        $this->db->where('toolkit_id', $toolkit_id);
        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Fetch all EOD reports for a technician.
     * 
     * @param string $technician_name The technician's name.
     * @return array List of EOD reports.
     */
    public function getReportsByTechnician($technician_name) {
        $this->db->select('*');
        $this->db->from('eod_inventory_reports');
        $this->db->where('technician_name', $technician_name);
        $this->db->order_by('eod_report_date', 'DESC');
        $query = $this->db->get();

        return $query->result_array();
    }
}
