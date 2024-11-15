<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Quotation_model'); // Load the model for database operations
        $this->load->helper(array('form', 'url')); // Load form and URL helpers
    }

    public function index() {
        // Load the quotation form view
        $this->load->view('admin/quotation/index');
    }

    public function submit() {
        // Load form validation library
        $this->load->library('form_validation');

        // Define validation rules
        $this->form_validation->set_rules('lead_customer_name', 'Lead/Customer Name', 'required');
        $this->form_validation->set_rules('project_amc', 'Project/AMC', 'required');
        $this->form_validation->set_rules('valid_until', 'Valid Until', 'required');
        $this->form_validation->set_rules('item_service[]', 'Item/Service', 'required');
        $this->form_validation->set_rules('quantity[]', 'Quantity', 'required|numeric');
        $this->form_validation->set_rules('unit_price[]', 'Unit Price', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $this->load->view('admin/quotation/index');
        } else {
            // Collect form data
            $data = array(
                'lead_customer_name' => $this->input->post('lead_customer_name'),
                'project_amc' => $this->input->post('project_amc'),
                'quotation_date' => date('Y-m-d'), // Auto-generated current date
                'valid_until' => $this->input->post('valid_until'),
                'items' => json_encode($this->input->post('item_service')),
                'quantities' => json_encode($this->input->post('quantity')),
                'unit_prices' => json_encode($this->input->post('unit_price')),
                'discount' => $this->input->post('discount'),
                'tax' => $this->input->post('tax'),
                'total_amount' => $this->calculate_total($this->input->post())
            );

            // Save to database
            $this->Quotation_model->insert_quotation($data);

            // Redirect to a success page or display a success message
            redirect('admin/quotation/success');
        }
    }

    private function calculate_total($data) {
        // Calculate total amount based on quantity, unit price, discount, and tax
        $total = 0;
        foreach ($data['quantity'] as $key => $quantity) {
            $total += $quantity * $data['unit_price'][$key];
        }
        if (!empty($data['discount'])) {
            $total -= ($data['discount'] / 100) * $total;
        }
        if (!empty($data['tax'])) {
            $total += ($data['tax'] / 100) * $total;
        }
        return $total;
    }

    public function success() {
        echo "Quotation submitted successfully!";
    }
}
?>
