<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EOD_Inventory extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    // Display the EOD Inventory Reporting Form
    public function index() {
        // Mocked data for now (replace with database calls if needed)
        $data['technician_name'] = $this->session->userdata('technician_name'); // Example: logged-in technician
        $data['toolkit_id'] = 'TK12345'; // Example Toolkit ID
        $data['inventory_items'] = ['Item 1', 'Item 2', 'Item 3', 'Item 4']; // Example inventory items

        // Load the view
        $this->loadViews('eod_inventory/index', $data);
    }

    // Handle form submission
    public function submit() {
        // Retrieve form data
        $technician_name = $this->input->post('technician_name');
        $toolkit_id = $this->input->post('toolkit_id');
        $eod_report_date = $this->input->post('eod_report_date');
        $inventory_items_used = $this->input->post('inventory_items_used');
        $quantity_used = $this->input->post('quantity_used');
        $remaining_items = $this->input->post('remaining_items');
        $quantity_remaining = $this->input->post('quantity_remaining');
        $remarks = $this->input->post('remarks');

        // Save data to database (mocked here, add database logic)
        $data = [
            'technician_name' => $technician_name,
            'toolkit_id' => $toolkit_id,
            'eod_report_date' => $eod_report_date,
            'inventory_items_used' => implode(', ', $inventory_items_used),
            'quantity_used' => $quantity_used,
            'remaining_items' => implode(', ', $remaining_items),
            'quantity_remaining' => $quantity_remaining,
            'remarks' => $remarks
        ];

        // Log the data for testing
        log_message('info', 'EOD Inventory Data Submitted: ' . json_encode($data));

        // Redirect to success page or back to the form
        $this->session->set_flashdata('success', 'EOD Inventory Report submitted successfully!');
        redirect('admin/EOD_Inventory');
    }
}
