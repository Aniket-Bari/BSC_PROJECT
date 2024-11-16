<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toolkit_Management extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Technician_model');   // Model to get technicians
        // $this->load->model('Inventory_model');    // Model to get inventory items
        // $this->load->model('Toolkit_model');      // Model to save toolkit data
    }

    public function index() {
        // $data['technicians'] = $this->Technician_model->get_all_technicians();
        // $data['inventory_items'] = $this->Inventory_model->get_all_items();
        $this->loadViews('toolkit_management/index');
    }

    public function save() {
        // Collecting form data
        $data = [
            'technician_name' => $this->input->post('technician_name'),
            'toolkit_id' => $this->input->post('toolkit_id'),
            'assigned_date' => $this->input->post('assigned_date'),
            'inventory_items' => json_encode($this->input->post('inventory_items')),  // Saving as JSON for multiple items
            'quantity_assigned' => $this->input->post('quantity_assigned'),
            'return_date' => $this->input->post('return_date'),
            'current_status' => $this->input->post('current_status')
        ];

        // Save data into the database
        $this->Toolkit_model->save_toolkit($data);
        redirect('admin/Toolkit_Management');  // Redirect to the form after saving
    }
}
